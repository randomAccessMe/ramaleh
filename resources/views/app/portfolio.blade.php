<section class="portfolio" id="portfolio">

    <div class="portfolio-margin">

        <h1>PORTFOLIO</h1>
        <hr/>

        <ul class="grid">

            @foreach($sites as $site)
                <li>
                    <a href="{{ $site->url }}">
                        <img src="/uploads/screenshots/{{ $site->screenshot }}" alt="Portfolio item"/>
                        <div class="text">
                            <p>{{ $site->name }}</p>
                            <p class="description">{{ $site->description }}</p>
                        </div>
                    </a>
                </li>
            @endforeach

        </ul>

    </div>

</section>