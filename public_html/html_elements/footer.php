
<!--

A simple footer module providing social media links as well as links to other pages and modals.

-->

<nav id="footer">

    <div class="row" id="footerSocial">
    </div>


    <div class="row" id="footerModals">
        <div class="col-sm-3 text-center">
            <a href="#" id="return">TOP</a>
        </div>

        <div class="col-sm-3 text-center fModal">
            <a href="#" data-toggle="modal" data-target="#ContactUs" class="footerLink">CONTACT US</a>
        </div>

        <div class="col-sm-3 text-center fModal">
            <a href="#" data-toggle="modal" data-target="#" class="footerLink">TERMS</a>
        </div>

        <div class="col-sm-3 text-center fModal">
            <a href="#" data-toggle="modal" data-target="#" class="footerLink">PRIVACY</a>
        </div>
    </div>


    <div class="row" id="footerLower">

        <div class="col-xs-3 socialButtons">
            <a href="html_elements/link.php?link=facebook" class="btn btn-social btn-simple">
                <i class="fa fa-facebook-square"></i>
            </a>

            <a href="html_elements/link.php?link=medium" class="btn btn-social btn-simple">
                <i class="fa fa-user"></i>
            </a>
        </div>


        <div class="col-sm-9 text-right" id="copywrite">
            <p id="cp">Copyright &copy; 2017. Developers' Foundation. All rights reserved.</a></p>
        </div>

    </div>

</nav>









<!--

 TODO:

 ALTER THIS MODAL TO CONTAIN CONTENTS FOR PRIVACY AND TERMS

 -->

<div class="modal fade" id="testModal" tabindex="-1" role="dialog" aria-labelledby="testModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal name -->
            <div class="modal-header">
                <h4 class="modal-title">Example Modal</h4>
            </div>

            <!-- Modal content -->
            <div class="modal-body">
                <div class='innerText'>
                    Lorem ipsum dolor sit amet elit. Cum veritatis sequi nulla nihil, dolor voluptatum nemo adipisci eligendi! Sed nisi perferendis, totam harum dicta.
                </div>
                <span id='infoCo'></span><br>
                <div class='grayText'><strong>What a great modal.</strong></div>
                <br/>
                <div class='innerText'>It's just wonderful, isn't it?</div>
            </div>

        </div>
    </div>
</div>
