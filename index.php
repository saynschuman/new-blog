<?php
/**
 * The main template file
 */

get_header(); ?>

<main>

	<div class="container">
		<div class="head-text">
			<!-- <h1 class="head-text-highlight">БЛОГ</h1> -->
			<!-- <p id="filters" class="tags">
				<a data-filter=".fashion" href="#">Статті</a>
				<a data-filter=".work" href="#">Відео</a>
				<a data-filter=".art" href="#">Анонси</a>
				<a data-filter=".people" href="#">Новини</a>
				<a data-filter="*" href="#" class="unfilter hide"><i class="fa fa-times" aria-hidden="true"></i></a>
			</p> -->
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="masonry isotopeContainer">

				<div class="col-md-4 masonry-row col-sm-6 articles">
					<img src="<?php bloginfo('template_url') ?>/assets/img/img-30.png" alt="">
					<div class="masonry-content">
						<a href="#">We Honor Panem’s District Heroes</a>
						<p class="spot ellipsis-readmore">Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et.Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et.Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et. <a href="#" class="more">»</a></p>
						<div class="links">
							<div class="icons">
								<a href="#" class="quick-read"><i class="fa fa-eye"></i></a>
								<a href="#"><i class="fa fa-heart"></i>8</a>
							</div>
							<a href="#" data-comments-id="1" class="open-comments"><i class="fa fa-comments"></i> Add a comment</a>
						</div>

						<div id="comments-1" class="comments">
							<div class="media">
								<a class="pull-left" href="#">
									<img class="media-object" width="28" height="28" alt="28x28" src="<?php bloginfo('template_url') ?>/assets/img/profil_photo-03.png" />
								</a>
								<div class="media-body">
									<h4 class="media-heading">Kate Harmon</h4>
									<span class="date">07 June 2015</span>
									<p class="comment-detail">Scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.</p>
								</div>
							</div>
							<div class="media">
								<a class="pull-left" href="#">
									<img class="media-object" width="28" height="28" alt="28x28" src="<?php bloginfo('template_url') ?>/assets/img/profil_photo-03.png" />
								</a>
								<div class="media-body">
									<textarea placeholder="Add a comment..."></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 masonry-row col-sm-6 video">
					<div class="embed-responsive embed-responsive-4by3">
							<iframe src="https://player.vimeo.com/video/49445992" class="embed-responsive-item" allowfullscreen></iframe>
						</div>
					<div class="masonry-content">
						<a href="#">We Honor Panem’s District Heroes</a>
						<p class="spot ellipsis-readmore">Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et.Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et.Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et. <a href="#" class="more">»</a></p>
						<div class="links">
							<div class="icons">
								<a href="#" class="quick-read"><i class="fa fa-eye"></i></a>
								<a href="#"><i class="fa fa-heart"></i>8</a>
							</div>
							<a href="#" data-comments-id="2" class="open-comments"><i class="fa fa-comments"></i> Add a comment</a>
						</div>

						<div id="comments-2" class="comments">
							<div class="media">
								<a class="pull-left" href="#">
									<img class="media-object" width="28" height="28" alt="28x28" src="<?php bloginfo('template_url') ?>/assets/img/profil_photo-03.png" />
								</a>
								<div class="media-body">
									<h4 class="media-heading">Kate Harmon</h4>
									<span class="date">07 June 2015</span>
									<p class="comment-detail">Scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.</p>
								</div>
							</div>
							<div class="media">
								<a class="pull-left" href="#">
									<img class="media-object" width="28" height="28" alt="28x28" src="<?php bloginfo('template_url') ?>/assets/img/profil_photo-03.png" />
								</a>
								<div class="media-body">
									<textarea placeholder="Add a comment..."></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 masonry-row col-sm-6 anouncments">
					<div class="medium-date">
							<div class="medium-date-day">20</div>
							<div class="medium-date-month">ЛИПНЯ</div>
						</div>
					<div class="masonry-content">
						<a href="#">We Honor Panem’s District Heroes</a>
						<p class="spot ellipsis-readmore">Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et.Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et.Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et. <a href="#" class="more">»</a></p>
						<div class="links">
							<div class="icons">
								<a href="#" class="quick-read"><i class="fa fa-eye"></i></a>
								<a href="#"><i class="fa fa-heart"></i>8</a>
							</div>
							<a href="#" data-comments-id="3" class="open-comments"><i class="fa fa-comments"></i> Add a comment</a>
						</div>

						<div id="comments-3" class="comments">
							<div class="media">
								<a class="pull-left" href="#">
									<img class="media-object" width="28" height="28" alt="28x28" src="<?php bloginfo('template_url') ?>/assets/img/profil_photo-03.png" />
								</a>
								<div class="media-body">
									<h4 class="media-heading">Kate Harmon</h4>
									<span class="date">07 June 2015</span>
									<p class="comment-detail">Scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.</p>
								</div>
							</div>
							<div class="media">
								<a class="pull-left" href="#">
									<img class="media-object" width="28" height="28" alt="28x28" src="<?php bloginfo('template_url') ?>/assets/img/profil_photo-03.png" />
								</a>
								<div class="media-body">
									<textarea placeholder="Add a comment..."></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 masonry-row col-sm-6 articles">
					<img src="<?php bloginfo('template_url') ?>/assets/img/img-30.png" alt="">
					<div class="masonry-content">
						<a href="#">We Honor Panem’s District Heroes</a>
						<p class="spot ellipsis-readmore">Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et.Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et.Donec fringilla euismod purus, in placerat nulla tempus sed. Aliquam lectus lacus, aliquamen facilisis fermentum congue, rhoncus et. <a href="#" class="more">»</a></p>
						<div class="links">
							<div class="icons">
								<a href="#" class="quick-read"><i class="fa fa-eye"></i></a>
								<a href="#"><i class="fa fa-heart"></i>8</a>
							</div>
							<a href="#" data-comments-id="4" class="open-comments"><i class="fa fa-comments"></i> Add a comment</a>
						</div>

						<div id="comments-4" class="comments is-expand">
							<div class="media">
								<a class="pull-left" href="#">
									<img class="media-object" width="28" height="28" alt="28x28" src="<?php bloginfo('template_url') ?>/assets/img/profil_photo-03.png" />
								</a>
								<div class="media-body">
									<textarea placeholder="Add a comment..."></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</main>

<?php get_footer();
