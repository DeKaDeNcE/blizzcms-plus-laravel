<section class="uk-section uk-section-xsmall uk-padding-remove slider-section">
    <div class="uk-background-cover uk-height-small header-section"></div>
</section>

<section class="uk-section uk-section-xsmall main-section" data-uk-height-viewport="expand: true">
    <div class="uk-container">
        <div class="uk-card uk-card-update uk-margin-small" >
            <div class="uk-card-body">
                <div class="uk-grid uk-grid-small" data-uk-grid>
                    <div class="uk-width-auto@m uk-text-center uk-text-left@m">
                    <h3 class="uk-h3 uk-text-bold uk-margin-remove"><span uk-icon="icon: blizzcms-icon;ratio: 0.8"></span> V 0.0.1 </h3>
                </div>
                
                <div class="uk-width-expand uk-text-center uk-text-right@m" id="update_notification" style="display:none;">
                
                </div>
            </div>
        </div>          
        <p class="uk-margin-small" id="update_information" style="display:none;"></p>          
        <p class="uk-text-small uk-margin-small" id="update_installed"><span class="uk-text-bold uk-text-warning"><i class="fas fa-exclamation-triangle"></i> Information:</span> Your installation of BlizzCMS is already updated to the latest version available.</p>
    </div>
</section>

  
<script>
    $(document).ready(function() {  
        $.ajax({
            type: 'GET',   
            url: 'updater.check',
            async: false,
            success: function(response) {
                if(response != ''){
                    // $('#update_notification').append('<strong>Update Available <span class="badge badge-pill badge-info">v. '+response+'</span></strong><a role="button" href="updater.update" class="btn btn-sm btn-info pull-right">Update Now</a>');
                    $('#update_notification').append('<a href="updater.update" class="uk-button uk-button-primary uk-button-large" id="button_updatecms"><i class="fas fa-sync fa-spin"></i> ' +response+ '</a>')
                    $('#update_information').append('<span class="uk-text-bold uk-text-warning"><i class="fas fa-exclamation-triangle"></i> Information:</span> A new update has been released ' +response + ' more information <a href="http://updateslab.wow-cms.com"> here </a></span>');
                    $('#update_information').show();
                    $('#update_notification').show();
                    $('#update_installed').hide();
                }
            }
        });
    });
</script>