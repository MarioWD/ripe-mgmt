<?php
/**
 * Created by PhpStorm.
 * User: Mario Hugo CF
 * Date: 2017-08-09
 * Time: 12:18 AM
 */
namespace controllers;
class Home extends Controller
{
    public function __construct()
    {
      parent::__construct();
      $this->news = [
          'hyper' => [
              'link' => 'https://hypebeast.com/2018/5/yung-heazy-cuz-youre-my-girl-video-premiere',
              'text' => 'Yung Heazy - Cuz You’re My Girl Video Premier - Hypebeast'
            ],
          'orange' => [
              'link' => 'http://beatroute.ca/2018/02/15/single-premiere-haley-blais-small-foreign-faction/',
              'text' => 'SINGLE PREMIERE: Haley Blais – “Small Foreign Faction” - Beatroute'
            ],
          'nopupils' => [
              'link' => 'https://www.straight.com/music/1073071/youtuber-gave-yung-heazy-big-boost',
              'text' => 'A YouTuber gave Yung Heazy a big boost - The Georgia Straight'
            ],
          'guydancing' => [
              'link' => 'https://noisey.vice.com/en_ca/article/8xqybp/watch-peach-pit-dance-alone-in-places-devoid-of-people-in-seventeen',
              'text' => 'Watch Peach Pit Dance Alone In Places Devoid of People in “Seventeen” - Noisey'
            ],
          'cigdevil' => [
              'link' => 'https://hypebeast.com/2017/10/best-bedroom-pop-music-clairo-zack-villere-rex-orange-county',
              'text' => 'Hypebeast - 15 New "Bedroom Pop" Artists You Should Check Out'
            ],
          'townbands' => [
              'link' => 'http://www.brooklynvegan.com/bandsintown-2017-year-end-data-including-fastest-growing-new-artists/',
              'text' => 'Brooklyn Vegan - Bandsintown 2017 year-end data, including “fastest growing new artists'
            ],
      ];
      $this->run();
    }
}
