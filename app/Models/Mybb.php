<?php
namespace App\Models;

/**
 * Class Mybb
 *
 * Implements helper functions for grabbing information from
 * the MyBB install.
 *
 * Can be configured by modifying application/config/mybb.php
 */
class Mybb // extends \CodeIgniter\Model
{

	/**
	 * Are we running in mock mode? 
	 * If so, fake database results.
	 * @var boolean
	 */
	protected $mock = false;

	/**
	 * Are we running in mock mode? 
	 * If so, fake database results.
	 * @var array
	 */
	protected $mockData = array(
		/**
		 * Bogus news items for testing.
		 */
		'bogus_news'	 => [
			['subject' => 'Authentication, enough already!', 'username' => 'jlp', 'dateline' => '1415388160', 'tid' => '396'],
			['subject' => 'CodeIgniter Translations', 'username' => 'jlp', 'dateline' => '1415387207', 'tid' => '376'],
			['subject' => 'Upgraded forum software to MyBB 1.8', 'username' => 'jlp', 'dateline' => '1415140912', 'tid' => '254'],
			['subject' => 'Spammers, blech', 'username' => 'ciadmin', 'dateline' => '1415138797', 'tid' => '202'],
			['subject' => 'Help Wanted: Wiki', 'username' => 'jlp', 'dateline' => '1414737566', 'tid' => '1769'],
		],
		/**
		 * Bogus posts for testing.
		 */
		'bogus_posts'	 => [
			['subject' => 'Multi Table Select (Active Records)', 'username' => 'Han Solo', 'lastpost' => '1414737566', 'tid' => '407'],
			['subject' => 'unexpected end of file', 'username' => 'Yoda', 'lastpost' => '1414567370', 'tid' => '413'],
			['subject' => 'Status Enable & Disable Not Working', 'username' => 'Luke Skywalker', 'lastpost' => '1414567370', 'tid' => '403'],
			['subject' => 'waiting for CI3.0 version', 'username' => 'Princess Leia', 'lastpost' => '1414567370', 'tid' => '4'],
			['subject' => 'How i can select most common value with codeigniter', 'username' => 'Obi Wan Kenobi', 'lastpost' => '1414567370', 'tid' => '414'],
		]
	);

	//--------------------------------------------------------------------

	/**
	 * Constructor.
	 * Establish database connection, if appropriate.
	 */
	public function __construct()
	{
//		parent :: __construct();

		$this->config = new \Config\App();

		try
		{
			// perhaps the test database?
			$this->db = \Config\Database::connect('default');
		}
		catch (\Exception $ex)
		{
			// no joy - we're stuck with the mock one
			$this->mock = true;
		}
	}

	//--------------------------------------------------------------------

	/**
	 * Retrieves the latest X posts. The posts must be in the forum specified in
	 * $config['mybb_forum_id'], have a replyto=0, username in the $config['mybb_news_usernames'] array,
	 * and visible=1.
	 *
	 * @param int $limit Number of the posts to retrieve
	 * @param str $order Direction to order results by. Either 'asc' or 'desc'
	 * @return null
	 */
	public function getRecentNews($limit = 5, $order = 'desc')
	{
		// If not running in production, return the mock data
		if ($this->mock)
		{
			return $this->mockData['bogus_news'];
		}

		$builder = $this->db->table('fx_posts');

		$where = array(
			'replyto'	 => 0,
			'visible'	 => 1,
			'fid'		 => $this->config->mybbNewsForum_id
		);

		$query = $builder->select('subject, username, dateline, tid')
				->whereIn('username', $this->config->mybbNewsUsernames)
				->where($where)
				->limit($limit, 0)
				->orderBy('dateline', $order)
				->get();

		return $query->getResultArray();
	}

	//--------------------------------------------------------------------

	/**
	 * Grabs the most recently active threads from the forums.
	 *
	 * @param int $limit
	 * @param string $order
	 * @return null
	 */
	public function getRecentPosts($limit = 5, $order = 'desc')
	{
		// If not running in production, return the mock data
		if ($this->mock)
		{
			return $this->mockData['fx_posts'];
		}

		$where = array(
			'visible'	 => 1,
			'deletetime' => 0
		);

		$builder = $this->db->table('fx_threads');
		$query = $builder->select('tid, subject, username, lastpost, lastposter')
				->where($where)
				->limit($limit, 0)
				->orderBy('lastpost', $order)
				->get();

		return $query->getResultArray();
	}

	//--------------------------------------------------------------------
}
