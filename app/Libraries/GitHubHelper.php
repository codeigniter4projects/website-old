<?php namespace App\Libraries;

class GitHubHelper
{
    /**
     * @var GithubAPI
     */
    protected $api;

    public function __construct()
    {
        $this->api = new GithubAPI();
    }

    /**
     * Will hit up the API and get the current
     * version of the frameworks, etc.
     *
     * @param array $data
     *
     * @return array
     */
    public function fillReleaseInfo(array $data): array
    {
        $ttl = config('App')->gitHubExpires;

        if (! $info4 = cache('info4')) {
            $info4 = $this->api->getLatestRelease('codeigniter4', 'framework');
            cache()->save('info4', $info4, $ttl);
        }
        $data['v4name'] = $info4['tag_name'];
        $data['v4link'] = $info4['zipball_url'];

        if (! $info3 = cache('info3')) {
            $info3 = $this->api->getLatestTag('bcit-ci', 'CodeIgniter');
            cache()->save('info3', $info3, $ttl);
        }
        $data['v3name'] = $info3['name'];
        $data['v3link'] = $info3['zipball_url'];

        if (! $info5 = cache('info5')) {
            $info5 = $this->api->getLatestRelease('bcit-ci', 'codeigniter3-translations');
            cache()->save('info5', $info5, $ttl);
        }
        $data['v3trans'] = $info5['tag_name'];

        return $data;
    }
}
