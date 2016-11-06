@if (Auth::user())
    <?php
        $LEFT_SIDEBAR = 'includes.left-sidebar';
    ?>
@else
    <?php
        $LEFT_SIDEBAR = 'includes.unauthorized-users.left-sidebar';
    ?>
@endif

<!DOCTYPE html>
<html>
@include('includes.head')
<body class="w3-theme-l4">
@include('includes.navigation')
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
    @include($LEFT_SIDEBAR)
        <!-- Middle Column -->
        <div class="w3-col m7">
            <!-- Pranesimai -->
            @if (Session::has('success-message'))
                <div class="w3-panel w3-green w3-margin">
                    <h3>Pavyko!</h3>
                    <p>{{Session::get('success-message')}}</p>
                </div>
            @elseif (Session::has('error-message'))
                <div class="w3-panel w3-red w3-margin">
                    <h3>Klaida!</h3>
                    <p>{{Session::get('error-message')}}</p>
                </div>
            @endif

            @yield('content')
            <!-- End Middle Column -->
        </div>

        @include('includes.right-sidebar')
        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>
<br>

@include('includes.footer')

<script>
    // Accordion
    function myFunction(id) {
        var x = document.getElementById(id);
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace("w3-show", "");
        }
    }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

<script src="{!!asset('/assets/summernote/summernote.css')!!}"></script>

<script src="{!!asset('/assets/summernote/summernote.min.js')!!}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#summernote').summernote({
            height:300,
        });
    });
</script>

</body>
</html>