<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/resume.css">
    <link rel="stylesheet" type="text/css"
          href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all"/>

</head>
<body>

<div class="hr"></div>
<div class="row">
    <div class="left top-left">
        <h1>{{ $resume->name }}</h1>
        <h2>Senior PHP Developer</h2>
    </div>
    <div class="top-right">
        <ul>
            <li><span>Phone:</span>{{ $resume->phone }}</li>
            <li><span>Address:</span>{{ $resume->address }}</li>
            <li><span>Email:</span><a href="mailto:{{ $resume->email }}">{{ $resume->email }}</a></li>
            <li><span>Github:</span><a href="http://github.com/randomAccessMe">Github.com/randomAccessMe</a</li>
            <li><span>LinkedIn:</span><a href="https://www.linkedin.com/in/rami-al-maleh-81b22b91">https://goo.gl/3UC5bB</a</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="left body-left">
        <h2>Summary</h2>
    </div>
    <div class="right body-right">
        <p>{{ $resume->summary }}</p>
    </div>
</div>
<div class="row">
    <div class="left body-left">
        <h2>Skills</h2>
    </div>
    <div class="right body-right skills">
        <div class="row">
            @for($i=0; $i<count($resume->skills); $i++)
                <span>{{ $resume->skills[$i]->name }}</span>
                @if(($i + 1) % 5 == 0)
                    </div>
                    <div class="row">
                @endif
            @endfor
    </div>
</div>
<div class="row">
    @for($i=0; $i<count($resume->jobs); $i++)
    <div class="left body-left">
        @if($i==0)
            <h2>Experience</h2>
        @endif
    </div>
    <div class="right body-right row">
        <div class="left" style="width: 50%">
            <h3>{{ $resume->jobs[$i]->employer }}</h3>
            <h4>{{ $resume->jobs[$i]->title }}</h4>
        </div>
        <div class="right body-right" style="width: 50%">
            <p>{{ $resume->jobs[$i]->start_date->format('M, Y') }} / {{ $resume->jobs[$i]->until_date->format('M, Y') }}</p>
        </div>
        <p>{{ $resume->jobs[$i]->experience }}</p>
    </div>
    @endfor
</div>

<div class="row">
    <div class="left body-left">
        <h2>Education</h2>
    </div>
    <div class="right body-right">
        <h3>Jordan University of Science and Technology</h3>
        <p>Bachelors In Computer Science ___ 3.75 GPA</p>
    </div>
</div>
</body>
</html>
