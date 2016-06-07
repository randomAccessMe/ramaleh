<section class="contact" id="contact">
    <h1>Contact</h1>
    <hr/>

    <div class="content">

        <div class="form">

            {!! Form::open(['route'=>'contact']) !!}

                <div class="column">
                    YOUR NAME<br/><br/>
                    {!! Form::text('name', null, ['id'=>'name', 'required']) !!}
                </div>

                <div class="column-2">
                    YOUR E-MAIL<br/><br/>
                    {!! Form::text('email', null, ['id'=>'email', 'required']) !!}
                </div>


                <div class="column-3">
                    MESSAGE<br/><br/>
                    {!! Form::textarea('message', null, ['id'=>'message', 'required']) !!}
                </div>

                <div class="button">
                    <span>
                        {!! Form::submit('SEND', ['id'=>'submit', 'class'=>'submit']) !!}
                    </span>
                </div>

            {!! Form::close() !!}

        </div>


        <div class="contact-text">

            To contact me please use the contact form visible<br/><br/>

            When sending files, please use<br/>
            the following e-mail<br/><br/>

            <strong>Rami AlMaleh</strong><br/><br/>

            e-mail: <strong><a href="mailto:{{ config('mail.to') }}">ramaleh91@gmail.com</a></strong>

        </div>


    </div>

</section>

