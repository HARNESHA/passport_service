// Service Required
jQuery(function() {
    jQuery('#applying-for').change(function(){
        reissue = jQuery(this).val();
        if( reissue == 'reissue' ){
            jQuery('#reissue').show();
        }else{
            jQuery('#reissue').hide();
        }
    });
  
    jQuery('input[name="passport_reason"]:radio').change(function () {
        current_checked = this.id;
        if( current_checked == 'passport_reason_1' ){
            jQuery('#reason_date').show();
            jQuery('#reason_select').hide();
        }else if( current_checked == 'passport_reason_2' ){
            jQuery('#reason_date').show();
            jQuery('#reason_select').hide();
        }else if( current_checked == 'passport_reason_3' ){
            jQuery('#reason_date').hide();
            jQuery('#reason_select').hide();
        }else if( current_checked == 'passport_reason_4' ){
            jQuery('#reason_date').hide();
            jQuery('#reason_select').show();
        }else if( current_checked == 'passport_reason_4' ){
            jQuery('#reason_date').hide();
            jQuery('#reason_select').show();
        }
    });
  
    jQuery("#passport_reason_6").change(function(){
        jQuery("#reason_other").toggle();
    });
    
    jQuery('#type-of-application').change(function(){
        app_type = jQuery(this).val();
        if( app_type == 'tatkaal' ){
            jQuery('#custom-msg').show();
        }else{
            jQuery('#custom-msg').hide();
        }
    });
    
    jQuery('#is-birth-india').change(function(){
        is_birth_india = jQuery(this).val();
        if( is_birth_india == 'yes' ){
            jQuery('.applicant-state').hide();
            jQuery('.applicant-district').hide();
            jQuery('.only-india').hide();
            jQuery('.all-country-list').show();
        }else{
            jQuery('.applicant-state').show();
            jQuery('.applicant-district').show();
            jQuery('.only-india').show();
            jQuery('.all-country-list').hide();
        }
    });
    
    jQuery('#applicant-employment-type').change(function(){
        applicant_employment_type = jQuery(this).val();
        if( applicant_employment_type == 'government' || applicant_employment_type == 'psu' || applicant_employment_type == 'statutory-body' ){
            jQuery('.applicant-employment-org').show();
        }else{
            jQuery('.applicant-employment-org').hide();
        }
    });
    
    jQuery('#applicant-previous-identity-certificate').change(function(){
        applicant_previous_identity_certificate = jQuery(this).val();
        if( applicant_previous_identity_certificate == 'yes' ){
            jQuery('.identity-certificate').show();
        }else{
            jQuery('.identity-certificate').hide();
        }
    });
    
    jQuery('#applicant-previous-diplomatic').change(function(){
        applicant_previous_diplomatic = jQuery(this).val();
        if( applicant_previous_diplomatic == 'yes' ){
            jQuery('.current-diplomatic').show();
        }else{
            jQuery('.current-diplomatic').hide();
        }
    });
    
    jQuery('#applicant-previous-passport').change(function(){
        applicant_previous_passport = jQuery(this).val();
        if( applicant_previous_passport == 'yes' ){
            jQuery('.previous-passport').show();
        }else{
            jQuery('.previous-passport').hide();
        }
    });
    
    jQuery('#applicant-other-criminal').change(function(){
        applicant_other_criminal = jQuery(this).val();
        if( applicant_other_criminal == 'yes' ){
            jQuery('.other-criminal').show();
        }else{
            jQuery('.other-criminal').hide();
        }
    });
    
    jQuery('#applicant-other-criminal-offence').change(function(){
        applicant_other_criminal_offence = jQuery(this).val();
        if( applicant_other_criminal_offence == 'yes' ){
            jQuery('.other-criminal-offence').show();
        }else{
            jQuery('.other-criminal-offence').hide();
        }
    });
    
    jQuery('#applicant-other-refused').change(function(){
        applicant_other_refused = jQuery(this).val();
        if( applicant_other_refused == 'yes' ){
            jQuery('.other-refused').show();
        }else{
            jQuery('.other-refused').hide();
        }
    });
    
    jQuery('#applicant-other-revoked').change(function(){
        applicant_other_revoked = jQuery(this).val();
        if( applicant_other_revoked == 'yes' ){
            jQuery('.other-revoked').show();
        }else{
            jQuery('.other-revoked').hide();
        }
    });
    
    jQuery('#applicant-other-political').change(function(){
        applicant_other_political = jQuery(this).val();
        if( applicant_other_political == 'yes' ){
            jQuery('.other-political').show();
        }else{
            jQuery('.other-political').hide();
        }
    });
    
    jQuery('#applicant-other-ec').change(function(){
        applicant_other_ec = jQuery(this).val();
        if( applicant_other_ec == 'yes' ){
            jQuery('.other-ec').show();
        }else{
            jQuery('.other-ec').hide();
        }
    });
  
});

