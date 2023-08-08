<?php 
session_start();
require('./_config.php');

$id = $_GET['animeId'];
$getAnime = file_get_contents("$api/getAnime/$id");
$getAnime = json_decode($getAnime, true);
$episodelist = $getAnime['episode_id'];
?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

    <title><?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads</title>
    

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="title"
        content="<?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads" />
    <meta name="description"
        content="<?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime." />
    <meta name="keywords"
        content="<?=$websiteTitle?>, watch anime online, free anime, anime stream, anime hd, english sub, kissanime, gogoanime, animeultima, 9anime, 123animes, vidstreaming, gogo-stream, animekisa, zoro.to, gogoanime.run, animefrenzy, animekisa" />
    <meta name="charset" content="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Language" content="en" />
    <meta property="og:title"
        content="<?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads">
    <meta property="og:description"
        content="<?=$websiteTitle?> #1 Watch High Quality Anime Online Without Ads. You can watch anime online free in HD without Ads. Best place for free find and one-click anime.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?=$websiteTitle?>">
    <meta property="og:url" content="<?=$websiteUrl?>/home">
    <meta itemprop="image" content="<?=$banner?>">
    <meta property="og:image" content="<?=$banner?>">
    <meta property="og:image:secure_url" content="<?=$banner?>">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="350">
    <meta name="apple-mobile-web-app-status-bar" content="#202125">
    <meta name="theme-color" content="#202125">
    <link rel="shortcut icon" href="<?=$websiteUrl?>/streamable.ico?v=<?=$version?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=$websiteUrl?>/streamable.ico?v=<?=$version?>" />
    <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/min.css?v=<?=$version?>">
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "url": "https://akatsuki-sc.000webhostapp.com/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://akatsuki-sc.000webhostapp.com/search?keyword={keyword}",
            "query-input": "required name=keyword"
        }
    }
</script>
    

    <script type="text/javascript">
    setTimeout(function() {
        var wpse326013 = document.createElement('link');
        wpse326013.rel = 'stylesheet';
        wpse326013.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css';
        wpse326013.type = 'text/css';
        var godefer = document.getElementsByTagName('link')[0];
        godefer.parentNode.insertBefore(wpse326013, godefer);
        var wpse326013_2 = document.createElement('link');
        wpse326013_2.rel = 'stylesheet';
        wpse326013_2.href =
            'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css';
        wpse326013_2.type = 'text/css';
        var godefer2 = document.getElementsByTagName('link')[0];
        godefer2.parentNode.insertBefore(wpse326013_2, godefer2);
    }, 500);
    </script>
    
    <noscript>
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
    </noscript>
    
    <link rel="manifest" href="./manifest.json">
</head>
<script>
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('<?=$websiteUrl?>/sw.js');
};
</script>
    <style> img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] { display: none;} </style>
     
</head>

<body data-page="page_home">
    <div id="sidebar_menu_bg"></div>
    <div id="wrapper" data-page="page_home">
     <?php include('./_php/header.php'); ?>
        <div class="clearfix"></div>
        <div class="deslide-wrap">
            <div class="container" style="max-width:100%!important;width:100%!important;">
                <div id="slider" class="swiper-container-initialized swiper-container-horizontal">
                    <?php include('./_php/slidebar.php'); ?>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
                    <div class="swiper-navigation">
                        <div class="swiper-button swiper-button-next" tabindex="0" role="button"
                            aria-label="Next slide"><i class="fas fa-angle-right"></i></div>
                        <div class="swiper-button swiper-button-prev" tabindex="0" role="button"
                            aria-label="Previous slide"><i class="fas fa-angle-left"></i></div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>

        <div id="anime-trending">
        <?php include('./_php/trending.php')?>
        </div>
    
        <div class="share-buttons share-buttons-home">
            <div class="container">
                <script type="text/javascript"
                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-63430163bc99824a"></script>
                <div class="share-buttons-block">
                    <div class="share-icon"></div>
                    <div class="sbb-title">
                        <span>Share <?=$websiteTitle?></span>
                        <p class="mb-0">to your friends</p>
                    </div>
                    <div class="addthis_inline_share_toolbox"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="mba-block" style="display: block; text-align: center; margin: 1rem 0;"><a href="https://mangareader.to" target="_blank" rel="nofollow"><img style="width: 728px; height: auto; max-width: 100%;" src="https://file.imgprox.net/728x90" alt="Mangareader"></a></div>
        
        <div id="anime-featured">
            <?php include('./_php/anime-featured.php')?>
        </div>
    
        <div id="main-wrapper">
            <div class="container">
                <div id="main-content">
                <?php if(isset($_COOKIE['userID'])){ 
                    $user_id = $_COOKIE['userID'];
                    $select = mysqli_query($conn, "SELECT * FROM `user_history` WHERE user_id = $user_id");
                    $rows = mysqli_fetch_all($select, MYSQLI_ASSOC);
                    $rows = array_reverse($rows);
                    if(count($rows) != 0){ ?>
<section class="block_area block_area_home">
  <div class="block_area-header">
    <div class="float-left bah-heading mr-4">
      <h2 class="cat-heading"><i class="fas fa-history mr-2"></i>Continue Watching</h2>
    </div>
    <div class="float-right viewmore">
      <a class="btn" href="/user/continue-watching">View more<i class="fas fa-angle-right ml-2"></i></a>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="tab-content">
    <div class="block_area-content block_area-list film_list film_list-grid">
      <div class="film_list-wrap">
        <?php
        // Initialize the anime array
        $animeArray = [];

        // Loop over the anime rows
        foreach ($rows as $row) {
          // Check if the anime is already in the array
          $animeIndex = array_search($row['anime_title'], array_column($animeArray, 'anime_title'));

          // If it's not in the array, add it
          if ($animeIndex === false) {
            $animeArray[] = [
              'anime_title' => $row['anime_title'],
              'anime_ep' => $row['anime_ep'],
              'anime_image' => $row['anime_image'],
              'anime_id' => $row['anime_id'],
              'anime_release' => $row['anime_release'],
              'anime_type' => $row['anime_type'],
              'dubOrSub' => $row['dubOrSub'] // Add dubOrSub key
            ];
          } else {
            // Otherwise, update the episode number and URL if the new episode is higher
            if ($row['anime_ep'] > $animeArray[$animeIndex]['anime_ep']) {
              $animeArray[$animeIndex]['anime_ep'] = $row['anime_ep'];
              $animeArray[$animeIndex]['anime_id'] = $row['anime_id'];
            }
          }
        }

        // Display the first four anime
        $counter = 0;
        foreach ($animeArray as $anime) {
          if ($counter >= 4) {
            break;
          }
          ?>
          <div class="flw-item">
            <div data-movieid="<?= $anime['anime_title'] ?>" class="remove-item remove-cw" data-toggle="tooltip" data-original-title="Remove">
              <form method="post" action="/user/ajax/_delete_anime.php">
                <input type="hidden" name="anime_title" value="<?= $anime['anime_title'] ?>">
                <button type="submit" name="delete_anime" style="border: none; background: none; cursor: pointer;">
                  <i class="fas fa-times"></i>
                </button>
              </form>
            </div>
            <div class="film-poster">
              <div class="tick ltr">
                <div class="tick-item-<?= $anime['dubOrSub'] ?> tick-eps amp-algn">
                  <?= strtoupper($anime['dubOrSub']) ?> <!-- Display dubOrSub value -->
                </div>
              </div>
              <div class="tick rtl">
                <div class="tick-item tick-eps amp-algn">Ep <?= $anime['anime_ep'] ?></div>
              </div>
              <img class="film-poster-img lazyload" data-src="<?= $anime['anime_image'] ?>" src="<?=$websiteUrl?>/files/images/no_poster.jpg" alt="<?= $anime['anime_title'] ?>">
              <a class="film-poster-ahref" href="/watch/<?= $anime['anime_id'] ?>" title="<?= $anime['anime_title'] ?>" data-jname="<?= $anime['anime_title'] ?>"><i class="fas fa-play"></i></a>
            </div>
            <div class="film-detail">
              <h3 class="film-name">
                <a href="/watch/<?= $anime['anime_id'] ?>" title="<?= $anime['anime_title'] ?>" data-jname="<?= $anime['anime_title'] ?>"><?= $anime['anime_title'] ?></a>
              </h3>
              <div class="fd-infor">
                <span class="fdi-item"><?= $anime['anime_release'] ?></span>
                <span class="dot"></span>
                <span class="fdi-item"><?= $anime['anime_type'] ?></span>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <?php
          $counter++;
        }
        ?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<?php } ?>
<?php } ?>
 <section class="block_area block_area_home">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Latest Episode</h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn" href="/latest/subbed">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid">
                                <div class="film_list-wrap">

                                    <?php 
                                $json = file_get_contents("$api/recent-release?type=1&page=1");
                                $json = json_decode($json, true);
                                foreach($json as $recentRelease) { ?>
                                    <div class="flw-item">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                                <div class="tick-item-sub  tick-eps amp-algn">
                                                    <?=$recentRelease['subOrDub']?></div>
                                            </div>
                                            <div class="tick rtl">
                                                <div class="tick-item tick-eps amp-algn">Ep
                                                    <?=$recentRelease['episodeNum']?></div>
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$recentRelease['imgUrl']?>"
                                                src="<?=$websiteUrl?>/files/images/no_poster.jpg" alt="<?=$recentRelease['name']?>">
                                            <a class="film-poster-ahref" href="/watch/<?=$recentRelease['episodeId']?>"
                                                title="<?=$recentRelease['name']?>"
                                                data-jname="<?=$recentRelease['name']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a href="/watch/<?=$recentRelease['episodeId']?>"
                                                    title="<?=$recentRelease['name']?>"
                                                    data-jname="<?=$recentRelease['name']?>"><?=$recentRelease['name']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item">Latest</span>
                                                <span class="dot"></span>
                                                <span class="fdi-item"><?=$recentRelease['subOrDub']?></span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                               <?php } ?>     

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>
                    
                    <div class="clearfix"></div>
 <section class="block_area block_area_home">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">New on <?=$websiteTitle?></h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn" href="/new-season">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid">
                                <div class="film_list-wrap">

                                          <?php 
                                $json = file_get_contents("$api/new-season?page=$page");
                                $json = json_decode($json, true);
                                foreach($json as $key => $newSea) { ?>
                                    <div class="flw-item">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                                <div class="tick-item-<?php $str = $newSea['animeTitle'];
                                                  $last_word_start = strrpos ( $str , " ") + 1;
                                                  $last_word_end = strlen($str) - 1;
                                                  $last_word = substr($str, $last_word_start, $last_word_end);
                                                  if ($last_word == "(Dub)"){echo "dub";} else {echo "sub";}
                                                ?>   tick-eps amp-algn"><?php $str = $newSea['animeTitle'];
                                                $last_word_start = strrpos ( $str , " ") + 1;
                                                $last_word_end = strlen($str) - 1;
                                                $last_word = substr($str, $last_word_start, $last_word_end);
                                                if ($last_word == "(Dub)"){echo "DUB";} else {echo "SUB";}
                                              ?></div>
                                            </div>
                                            <div class="tick rtl">
                                            </div>
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$newSea['imgUrl']?>"
                                                src="<?=$websiteUrl?>/files/images/no_poster.jpg"
                                                alt="<?=$newSea['animeTitle']?>">
                                            <a class="film-poster-ahref"
                                                href="/anime/<?=$newSea['animeId']?>"
                                                title="<?=$newSea['animeTitle']?>"
                                                data-jname="<?=$newSea['animeTitle']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a
                                                    href="/anime/<?=$newSea['animeId']?>"
                                                    title="<?=$newSea['animeTitle']?>"
                                                    data-jname="<?=$newSea['animeTitle']?>"><?=$newSea['animeTitle']?></a>
                                            </h3>
                                            <div class="description"></div>
                                            <div class="fd-infor">
                                                <span class="fdi-item"><?=$newSea['status']?></span>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                <?php } ?>   

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>
                                        
                    <?php include('./_php/schedule.php'); ?>
                                         <section class="block_area block_area_home">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Top Upcoming</h2>
                            </div>
                            <div class="float-right viewmore">
                                <a class="btn" href="/latest/upcoming">View more<i
                                        class="fas fa-angle-right ml-2"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="tab-content">
                            <div class="block_area-content block_area-list film_list film_list-grid">
                                <div class="film_list-wrap">

                                    <?php 
                                $json = file_get_contents("$ani/meta/anilist/advanced-search?season=FALL&year=2023");
                                $json = json_decode($json, true);
                                foreach($json['results'] as $key => $recentRelease){ ?>
                          <?php $title = $recentRelease['title']; { ?>
                                    <div class="flw-item">
                                        <div class="film-poster">
                                            <div class="tick ltr">
                                                <div class="tick-item-sub  tick-eps amp-algn">
                                                    SUB</div>
                                            </div>
                                           
                                            <img class="film-poster-img lazyload"
                                                data-src="<?=$recentRelease['image']?>"
                                                src="<?=$websiteUrl?>/files/images/no_poster.jpg" alt="<?=$title['romaji']?>">
                                            <a class="film-poster-ahref" href="<?=$websiteUrl?>/anilist/anime?id=<?=$recentRelease['id']?>"
                                                title="<?=$title['romaji']?>"
                                                data-jname="<?=$title['romaji']?>"><i class="fas fa-play"></i></a>
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a href="<?=$websiteUrl?>/anilist/anime?id=<?=$recentRelease['id']?>"
                                                    title="<?=$title['romaji']?>"
                                                    data-jname="<?=$title['romaji']?>"><?=$title['romaji']?></a>
                                            </h3>
                                            <div class="fd-infor">
                                                <span class="fdi-item"><?=$recentRelease['type']?></span>
                                                <span class="dot"></span>
                          <span class="fdi-item">FALL</span>
                          
                <span class="dot"></span>                      <span class="fdi-item"><?=$recentRelease['releaseDate']?></span>
                                                       </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                               <?php } ?> 
                                 <?php } ?> 

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
                </div>
                <?php include('./_php/sidenav.php'); ?>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php include('./_php/footer.php'); ?>
        <div id="mask-overlay"></div>
        
      
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js">
        </script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
        
         <!--<script type="text/javascript" src="https://aniwatch.to/js/app.min.js?v=1.1"></script>-->
        <script type="text/javascript" src="<?=$websiteUrl?>/files/js/app.js?v=<?=$version?>"></script>
          
        <script type="text/javascript" src="<?=$websiteUrl?>/files/js/comman.js?v=<?=$version?>"></script>
        <script type="text/javascript" src="<?=$websiteUrl?>/files/js/movie.js?v=<?=$version?>"></script>
        <link rel="stylesheet" href="<?=$websiteUrl?>/files/css/jquery-ui.css?v=<?=$version?>">
        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!--<script type="text/javascript" src="<?=$websiteUrl?>/files/js/function.js?v=<?=$version?>"></script>-->
    </div>
</body>

</html>