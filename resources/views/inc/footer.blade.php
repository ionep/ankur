<div id='footer'>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top:40px;">
                <p>
                    Copyright 
                    <?php 
                    $startYear = 2018; 
                    $currentYear = date('Y');
                    echo $startYear;
                    if ($startYear != $currentYear) {
                        echo '-' . $currentYear;
                    }
                    ?>. All rights Reserved
                </p>
                <p class="designer">
                    Designed and Developed by <a target='_blank' href='http://facebook.com/bipin.thapa.5680'>Bipin Thapa</a>
                </p>
            </div>
            <div class="col-md-6" style="border-left: solid black 1px;">
                <h3>For more information</h3>
                <p><i class="fa fa-map-marker"></i> &nbsp Sanothimi Magargaun, Madhyapur Thimi Municipality, Bhaktapur</p>
                <p><i class="fa fa-phone"></i> &nbsp 01-6636727 </p>
                <p><i class="fa fa-envelope"></i> &nbsp savingankur@gmail.com</p>
            </div>
        </div>
    </div>
</div>