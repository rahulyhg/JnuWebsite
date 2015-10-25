
    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><a href="events-list.html">Events</a></h6>
                    <h6><span class="page-active">Public and Patient Involvement in Health Research</span></h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="event-container clearfix">
                            <div style="display: inline; float: left; padding: 7px 20px 15px 0px">
                                <img src="<?php echo base_url(); ?>images/events/event-image.jpg" alt="">
                                <div class="event-contact">
                                    <h4>Contact Details</h4>
                                    <i>
                                    <ul>
                                        <li>City Events Team</li>
                                        <li>City University London</li>
                                        <li>Northampton Square</li>
                                        <li>London</li>
                                        <li>EC1V 0HB</li>
                                        <li>United Kingdom</li>
                                        <li>+44 (0)20 7040 8037</li>
                                    </ul>
                                    </i>
                                </div>
                            </div> <!-- /.left-event-content -->
                                <h2 class="event-title">Public and Patient Involvement in Health Research</h2> 
                                <span class="event-time">Friday 22 November - Friday 24 January 2014</span>
                                <p>During this inaugural lecture Professor Amanda Burls considers the state of public and patient involvement in shared decision making and health research. Professor Burls will discuss the activities of the Network to Amanda-Burls-NuffieldSupport Understanding of Health Research and ThinkWell, a not-for-profit organisation set up to help the public understand health information so they can make.</p>
                                <p><strong class="dark-text">Speaker:</strong> Professor Amanda Burls - Professor of Public Health, City University London</p>
                                <p><strong class="dark-text">Location: Drysdale Lecture Theatre, Drysdale Building, City University London, EC1V 0HB</strong></p>
                                <p>Amanda Burls is a public health physician. She founded and directs ThinkWell, a novel internet-based research programme, which aims to help the public understand health information so they can make informed health decisions and also set up and participate in research studies.</p>
                                <p>In 2011 she co-organised a Conference on Enhancing Public Understanding of Health Research, which resulted in the formation of the International Network for Enhancing Understanding of Health Research.</p>
                                <div class="google-map-canvas" id="map-canvas" style="height: 210px;">
                                </div>
                            
                        </div> <!-- /.event-container -->
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <?php 
                    $this->load->view('templates/NoticeSidebar');
                    $this->load->view('templates/NewsSidebar');
                    $this->load->view('templates/EventsSidebar');
                ?>

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->
<script>
        function initialize() {
          var mapOptions = {
            zoom: 15,
            center: new google.maps.LatLng(23.7084408, 90.4112417)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
              
              
          var myLatLng = {lat: 23.7084408, lng: 90.4112417};
          var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Jagannath University!'
  });
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>