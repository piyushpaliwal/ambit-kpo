                 <form class="widget-contact-form" data-success-message-delay="40000" novalidate
                     action="include/contact-form.php" role="form" method="post">
                     <div class="row">
                         <div class="form-group ">
                         
                             <input type="text" aria-required="true" name="widget-contact-form-name" required
                                 class="form-control required name" placeholder="Enter your Name">
                         </div>
                         <div class="form-group ">
                          
                             <input type="email" aria-required="true" name="widget-contact-form-email" required
                                 class="form-control required email" placeholder="Enter your Email">
                         </div>
                     </div>
                     <div class="row">
                         <div class="form-group ">
                          
                             <input type="text" name="widget-contact-form-subject" required
                                 class="form-control required" placeholder="Subject...">
                         </div>
                     </div>
                     <div class="form-group">
                  
                         <textarea type="text" name="widget-contact-form-message" required rows="5"
                             class="form-control required" placeholder="Enter your Message"></textarea>
                     </div>
                     <!-- <div class="form-group">
                         <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                         <div class="g-recaptcha" data-sitekey="6LddCxAUAAAAAKOg0-U6IprqOZ7vTfiMNSyQT2-M"></div>
                     </div> -->
                     <button class="btn btn-primary" type="submit" id="form-submit"><i
                             class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                 </form>