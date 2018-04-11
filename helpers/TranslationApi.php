<?php
namespace app\helpers;

use Google\Cloud\Translate\TranslateClient;

class TranslationApi
{
    public function translateWord($text) 
    {
        $projectId = 'my-project-1523005300650';
        $targetLanguage = 'zh-CN';  // Which language to translate to?
        
        $translate = new TranslateClient();
        
        $translation = $translate->translate($text, [
            'target' => $targetLanguage
        ]);
        
        // echo 'input: ' . $text . PHP_EOL; 
        // echo 'output: ' . $translation['text'];
        // print_r($translation);
        return $translation['text'];
        
    } 
    
    // if(isset($_POST['keyword']))
    // {
        
        // $text = $_POST['keyword'];
        // echo $text;
        // $this->translateWord($text);
    // } 
    
}
