<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="{{ asset('css/feedback/feedback.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />


</head>
@if(auth()->check())
    <body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class='fb-form'>
        <form action="{{ route('feedback.create') }}" method="post" id="feedback-form">
            @csrf
            <h2>Feedback</h2>
            <textarea name="feedback_content" id="feedback_content" placeholder="Tell us what you think" required></textarea>
            <button type="submit">Submit Feedback</button>
        </form>
    </div>
    </body>
@else
    <div class="message-container">
        <p>Bạn cần đăng nhập hoặc đăng ký để thanh toán.</p>
        <button><a href="{{ route('login.show') }}">Đăng nhập</a></button>
        <button><a href="{{ route('register.show') }}">Đăng ký</a></button>
    </div>
@endif
</html>
<script>
    $(document).ready(function() {
        $('#feedback-form').submit(function(event) {
            event.preventDefault(); // Prevent the default form submission
            var formData = $(this).serialize(); // Serialize the form data
            $.ajax({
                url: "{{ route('feedback.create') }}", // Replace with your route URL
                type: "POST",
                data: formData,
                success: function(data) {
                    // Handle the response (e.g., show a success message)
                    alertify.success("Feedback submitted successfully.");
                    setTimeout(function() {
                        window.location.href = "{{ route('client.home') }}"; // Replace with your homepage URL
                    }, 1000);

                },
                error: function(xhr, status, error) {
                    // Handle errors (e.g., show an error message)
                    alertify.error("Error: " + error);
                }
            });
        });
    });

</script>

