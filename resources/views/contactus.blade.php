<!-- resources/views/contactus.blade.php -->
@extends('Components.Layout')


@section('title', 'Contact Us')

@section('content')
    <main class="site-main">
        <form action="/welcome" method="POST" onsubmit="showConfirmation(event)">
            @csrf
            <h1>CONTACT US</h1>
            <input type="text" id="name" placeholder="Your name" required>
            <input type="email" id="email" placeholder="Email Address" required>
            <textarea id="message" cols="30" rows="10" placeholder="Write your message here" required></textarea>
            <input type="submit" value="Send Message" class="send-btn">
        </form>
    </main>

    <!-- Modal Popup -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <p>Your message has been sent! Thank you!</p>
        </div>
    </div>
@endsection
