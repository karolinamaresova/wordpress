<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php get_header(); ?>
  <header class="masthead" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">




            <h2> <?php the_author();?> </h2>

          </div>
        </div>
      </div>
    </div>
  </header>

  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div id="content" class="narrowcolumn">



            <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    ?>

            <h2>About: <?php echo $curauth->nickname; ?></h2>
            <dl>
              <dt>Website</dt>
              <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
              <dt>Profile</dt>
              <dd><?php echo $curauth->user_description; ?></dd>
              <dt>Email</dt>
              <dd><?php echo $curauth->user_email; ?></dd>


            </dl>

            <h2>Posts by <?php echo $curauth->nickname; ?>:</h2>

            <ul>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <li>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                  <?php the_title(); ?></a>,
                <?php the_time('d M Y'); ?> in <?php the_category('&');?>
              </li>

              <?php endwhile; else: ?>
              <p><?php _e('No posts by this author.'); ?></p>

              <?php endif; ?>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </article>







  <?php get_footer(); ?>

</body>

</html>