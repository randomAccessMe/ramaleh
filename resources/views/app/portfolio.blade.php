<section class="portfolio" id="portfolio">

    <div class="portfolio-margin">

        <h1>PORTFOLIO</h1>
        <hr/>

        <p style="width:550px; color: #0c0c0c; text-align: center; margin:auto">Disclaimer: I do not own the websites listed in my portfolio, I have only worked on them doing some all on  my own and contributing to others with a team of developers.</p>

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