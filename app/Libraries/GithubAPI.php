<?php
namespace App\Libraries;

use Github\Client;
use Github\HttpClient\CachedHttpClient;
use Throwable;

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
	 * @uses Client
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->client = new Client(new CachedHttpClient([
			'cache_dir' => '/tmp/github-api-cache',
		]));
	}

	/**
	 * Retrieves extended information about a repository given its username and repository name
	 *
	 * @param string $username   the username
	 * @param string $repository the repository name
	 *
	 * @return array|null Repository information
	 */
	public function getRepoInfo($username, $repository): ?array
	{
		try
		{
			$info = $this->client->api('repo')->show($username, $repository);
			return ( ! empty($info)) ? $info : FALSE;
		}
		catch (Throwable $e)
		{
			return null;
		}
	}

	/**
	 * Retrieves extended information about releases in a repository 
	 * given its username and repository name.
	 * 
	 * Use this for CodeIgniter4.
	 * 
	 * @param string $username   the username
	 * @param string $repository the repository name
	 *
	 * @return array|null Releases information
	 */
	public function getRepoReleases($username, $repository): ?array
	{
		try
		{
			$info = $this->client->api('repo')->releases()->all($username, $repository);
			return ( ! empty($info)) ? $info : FALSE;
		}
		catch (Throwable $e)
		{
			return null;
		}
	}

	/**
	 * Retrieves name & download link for latest release.
	 * 
	 * Use this for CodeIgniter4.
	 * 
	 * @param string $username   the username
	 * @param string $repository the repository name
	 *
	 * @return array|null Releases information
	 */
	public function getLatestRelease($username, $repository): ?array
	{
		try
		{
			$info = $this->client->api('repo')->releases()->all($username, $repository);
			return ( ! empty($info)) ? $info[0] : FALSE;
		}
		catch (Throwable $e)
		{
			return null;
		}
	}

	/**
	 * Retrieves extended information about the tags (releases) in a repository 
	 * given its username and repository name.
	 * 
	 * Use this for CodeIgniter3.
	 * 
	 * @param string $username   the username
	 * @param string $repository the repository name
	 *
	 * @return array|null Releases information
	 */
	public function getRepoTags($username, $repository): ?array
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
		catch (Throwable $e)
		{
			return null;
		}
	}

	/**
	 * Retrieves name & download link for latest tag.
	 * 
	 * Use this for CodeIgniter3.
	 * 
	 * @param string $username   the username
	 * @param string $repository the repository name
	 *
	 * @return array|null Releases information
	 */
	public function getLatestTag($username, $repository): ?array
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
		catch (Throwable $e)
		{
			return null;
		}
	}

	/**
	 * Retrieves top 12contributors information for a repository given its username and repository name
	 *
	 * @param string $username   the username
	 * @param string $repository the repository name
	 *
	 * @return array|null Contributor information
	 */
	public function getContributors($username, $repository): ?array
	{
		try
		{
			$info = array_slice($this->client->api('repo')->contributors($username, $repository), 0, 12);
			return ( ! empty($info)) ? $info : FALSE;
		}
		catch (Throwable $e)
		{
			return null;
		}
	}

}
