<footer class="footer ">      
    <div class="container">
        <div class="row">
            <div class="col-sm-4 myCols">
                <h5>Get started</h5>
                <ul>
                    <li><a href="{{ route('Getstart')}}">Log in</a></li>
                    <li><a href="{{ route('Getstart')}}">Sign up</a></li>    
                </ul>
            </div>
            <div class="col-sm-4 myCols">
                <h5>About us</h5>
                <ul>
                    <li><a href="{{ route('about')}}">FAQ</a></li>
                    <li><a href="{{ route('about')}}">Service</a></li>
                    <li><a href="{{ route('about')}}">Contact us</a></li>
                    
                </ul>
            </div>
            <div class="col-sm-4 myCols">
                <h5>Follow us</h5>
                <div class="social-networks">
                    <a href="" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="" class="facebook"><i class="fa fa-facebook-official"></i></a>
                    <a href="" class="google"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>    
    <div class="footer-copyright">
        <p>{{env('APP_PUBLIC_NAME')}} by <a href="">@SHADOW</a> &copy; {{date('Y')}}</p>
    </div>
</footer>