<?php namespace Modules\SocialMedia\Http\Controllers;

use Illuminate\Support\Facades\App;
use Modules\Core\Http\Controllers\BasePublicController;
use CodeZero\Twitter\Twitter;
use CodeZero\Twitter\TwitterException;

class PublicController extends BasePublicController
{

    public function index()
    {
        // $places = $this->place->allTranslatedIn(App::getLocale());
        // $places = $this->place->all();
        $twitterConfig = base_path() . '/config/codezero.twitter.php';


        $twitter = new Twitter($twitterConfig);

        try
        {
            // $username = 'fuzin3';
            // $tweets = $twitter->getTweetsFromUser($username, 10, 1, true);
            $tweets = $twitter->searchTweets('kronach', 10, 1, true);
        }
        catch (TwitterException $e)
        {
            $error = $e->getMessage();
        }

        return view('socialmedia.index', compact('tweets'));
    }


}