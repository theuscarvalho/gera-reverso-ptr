<?php
/*****************************************
*  Desenvolvido por Matheus Carvalho     *
*     www.matheuscarvalho.com.br         *
******************************************/
function get_list_ip($ip_addr_cidr){
    $ip_arr = explode("/", $ip_addr_cidr);    
    $bin = "";
    for($i=1;$i<=32;$i++) {
        $bin .= $ip_arr[1] >= $i ? '1' : '0';
    }
    $ip_arr[1] = bindec($bin);
    $ip = ip2long($ip_arr[0]);
    $nm = $ip_arr[1];
    $nw = ($ip & $nm);
    $bc = $nw | ~$nm;
    $bc_long = ip2long(long2ip($bc));
    for($zm=1;($nw + $zm)<=($bc_long - 1);$zm++)
    {
        $ret[] ['ip']= long2ip(+ $nw + $zm);
    }
    return $ret;
}
if (isset($_GET["cidr"]) || isset($_GET['dominio'])) {
	$cidr = get_list_ip ($_GET["cidr"]);
	$dominio = $_GET["dominio"];
}
foreach( $cidr as $post ) { 
    @$ips = $post[ip];
    @$stri = $post[ip];
	$strin = str_replace('.', '-', $stri);
	echo "<pre>";
	?>
    local-data: "<?php echo strrev($strin)."-$dominio. IN A ".($ips) ?>"
    local-data-ptr: "<?php echo $data2 = ($ips)." ".strrev($strin)."-".($dominio)?>"	
<?php
echo "</pre>";
}
?>
 