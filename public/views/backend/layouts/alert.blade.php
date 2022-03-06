@if( isset( $_GET['status'] ) && isset( $_GET['message'] ) )
<div class="alert 
{{  
    $_GET['status'] == "hata" || $_GET['status'] == "error" ? "alert-danger" : "alert-primary" 
}} 
 small">
    {{ $_GET['message'] }}
</div>
@endif