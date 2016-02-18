<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/DateFind.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/date_results", function() use ($app) {
        $my_DateFind = new DateFind;
        $day_week_result = $my_DateFind->dayOfWeekFinder($_GET['month'], $_GET['day'], $_GET['year']);
        return $app['twig']->render('index.html.twig', array('result' => $day_week_result));
    });

    return $app;
?>
