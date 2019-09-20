<?php
namespace App\Libraries;

use Github;

class GithubAPI
{

	/**
	 * Github API Client 
	 *
	 * @var object
	 */
	private $client = null;

	/**
	 * Class constructor
	 *
	 * Loads the Github API library with cache enabled by default.
	 * Returns false on failures.
	 *
	 * @uses \Github\Client
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->client = new Github\Client(
				new\Github\HttpClient\CachedHttpClient(array('cache_dir' => '/tmp/github-api-cache'))
		);
	}

	/**
	 * Retrieves extended information about a repository given its username and repository name
	 *
	 * @param string    the username
	 * @param string	the repository name
	 * @return array    repository information
	 */
	public function getRepoInfo($username, $repository)
	{
		try
		{
			$info = $this->client->api('repo')->show($username, $repository);
			return ( ! empty($info)) ? $info : FALSE;
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}

	/**
	 * Retrieves extended information about releases in a repository 
	 * given its username and repository name.
	 * 
	 * Use this for CodeIgniter4.
	 * 
	 * @param string    the username
	 * @param string	the repository name
	 * @return array    releases information
	 */
	public function getRepoReleases($username, $repository)
	{
		try
		{
			$info = $this->client->api('repo')->releases()->all($username, $repository);
			return ( ! empty($info)) ? $info : FALSE;
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}

	/**
	 * Retrieves name & download link for latest release.
	 * 
	 * Use this for CodeIgniter4.
	 * 
	 * @param string    the username
	 * @param string	the repository name
	 * @return array    releases information
	 */
	public function getLatestRelease($username, $repository)
	{
		try
		{
			$info = $this->client->api('repo')->releases()->all($username, $repository);
			return ( ! empty($info)) ? $info[0] : FALSE;
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}

	/**
	 * Retrieves extended information about the tags (releases) in a repository 
	 * given its username and repository name.
	 * 
	 * Use this for CodeIgniter3.
	 * 
	 * @param string    the username
	 * @param string	the repository name
	 * @return array    releases information
	 */
	public function getRepoTags($username, $repository)
	{
		try
		{
			$info = $this->client->api('repo')->tags($username, $repository);
			$results = [];
			foreach ($info as $key => $value)
				if (substr($value['name'], 0, 1) !== 'v')
					$results[] = $value;
			return ( ! empty($results)) ? $results : FALSE;
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}

	/**
	 * Retrieves name & download link for latest tag.
	 * 
	 * Use this for CodeIgniter3.
	 * 
	 * @param string    the username
	 * @param string	the repository name
	 * @return array    releases information
	 */
	public function getLatestTag($username, $repository)
	{
		try
		{
			$info = $this->client->api('repo')->tags($username, $repository);
			$results = [];
			foreach ($info as $key => $value)
			{
				if (substr($value['name'], 0, 1) !== 'v')
				{
					$results[] = $value;
				}
			}
			return ( ! empty($results)) ? $results[0] : FALSE;
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}

	/**
	 * Retrieves top 12contributors information for a repository given its username and repository name
	 *
	 * @param string    the username
	 * @param string	the repository name
	 * @return array    contributor information
	 */
	public function getContributors($username, $repository)
	{
		try
		{
			$info = array_slice($this->client->api('repo')->contributors($username, $repository), 0, 12);
			return ( ! empty($info)) ? $info : FALSE;
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}

}
