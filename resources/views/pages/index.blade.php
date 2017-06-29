@extends('main')

@section('title', 'Accueil')

@section('content')
	<section id="banner">
		<div class="content">
			<header>
				<h1>Lorem Ipsum Dolores</h1>
				<p>A free and fully responsive site template</p>
			</header>
			<p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. Pellentesque sapien ac quam. Lorem ipsum dolor sit nullam.</p>
			<ul class="actions">
				<li><a href="#" class="button big">Learn More</a></li>
			</ul>
		</div>
		<span class="image object">
			<img src="images/pic10.jpg" alt="" />
		</span>
	</section>

	<section>
		<header class="major">
			<h2>Derniers acticles</h2>
		</header>
		<div class="posts">
			@foreach ($posts as $post)
				<article>
					<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
					<h3>{{ $post->title }}</h3>
					<p>{{ substr(strip_tags($post->body), 0, 100) }}{{ strlen(strip_tags($post->body)) > 100 ? "..." : "" }}</p>
					<ul class="actions">
						<li><a href="" class="button">Continuer</a></li>
					</ul>
				</article>
			@endforeach
	</div>
	</section>
@endsection
