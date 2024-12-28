@extends('main')
@section('title', 'Contact')
@section('main')
    <h1 class="pageHead">Contact Me</h1>
    <section class="contact">
        <h4>This is the best way to contact me. Perks of developing my own webapp, I don't have to give you my email.</h4>
        <div class="messageForm">
            <label for="subject">Subject: </label>
            <input type="text" name="subject" id="subject">
            <label for="message">Message: </label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <button id="send" onclick="validate()">Send</button>
        </div>
    </section>
    <div class="validator">
        <form action="/send" method="post" class="question">
            What is {{$num1}} {{$operator}} {{$num2}}
            <input type="hidden" name="messageSubject">
            <input type="text" name="answer" id="answer" class="answer">
            <input type="submit" value="Submit" id="validate">
        </div>
    </div>
    <script>
        const validator = document.querySelector('.validator')
        const answer = document.getElementById('answer')
        const validate = document.getElementById('validate')
        const question = document.querySelector('.question')
        const submit = document.getElementById('send')
        const form  = document.querySelector('form')
        form.addEventListener('sumbit', (e) => {
            event.preventDefault()
            validator.style.display = 'block'
            question.style.display = 'flex'
        })
    </script>
@endsection