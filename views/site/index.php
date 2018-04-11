<?php
$this->title = 'PinyinSearch';
?>

<div class="site-index">

    <div class="row">
        <div class="col-lg-12">
            <h1>Pinyin To Hanzi</h1>
                <form>
                <br>
                  <input style="width: 50%" type="text" class="form-control" id="keyword" name="keyword" value="">
                  <br>
                  <input id="submit" type="submit" class="btn btn-primary" value="Submit">
                </form>
            <br><br>
            <textarea class="form-control" id="translatedtext" rows="5"></textarea>
        </div>
    </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$('#submit').click(function() {
    
    var keyword = jQuery('#keyword').val();
    
    if (keyword == "") {
        alert('Input text is empty.'); 
    } else {       
        <?php use yii\helpers\Url; ?>
        var url1='<?php echo  Url::toRoute('/translate/translation'); ?>';
        console.log(keyword);

        $.ajax({
            url: url1,
            // type: 'POST',
            type: 'GET',
            dataType: 'json',
            data: {keyword: keyword},
            success: function(msg) {
                console.log(data);
                console.log(msg);
                $('#translatedtext').html(msg);
            }               
        });
    }
    
});
</script>