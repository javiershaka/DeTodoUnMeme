<?php

include('negocio.php');

/* TRAER DESCRIPCION PROYECTO   TRAER DESCRIPCION PROYECTO   TRAER DESCRIPCION PROYECTO   TRAER DESCRIPCION PROYECTO  */

if (isset($_GET['proyectos_des'])) {
    $item = proyectos_descripcion($_GET['proyectos_des']);
    $itemtec = proyecto_tecnologias($item['id']);

    $html = '<div class="barra detalles_item_portafolio_cerrar"><span></span></div>';

    $html.='<div class="slider"><ul class="rslides sliderportafolio" id="">';

    if (!is_dir('../img/proyectos/' . $item['tipo'] . '/' . $item['nombreid'])) {
        $item['nombreid'] = "plantilla";
    }
    $dirint = dir('../img/proyectos/' . $item['tipo'] . '/' . $item['nombreid'] . '/slide/');
    while (($archivo = $dirint->read()) !== false) {
        if (preg_match('/.jpg|.jpeg|.png|.PNG|.JPG/', $archivo)) {
            $html.=' <li> <img src="img/proyectos/' . $item['tipo'] . '/' . $item['nombreid'] . '/slide/' . $archivo . '" >  </li>';
        }
    } $dirint->close();

    if ($item['video'] != '0') {
        $html.='<li><iframe width="606" height="329" src="http://www.youtube.com/embed/' . $item['video'] . '?rel=0" frameborder="0" allowfullscreen></iframe></li>';
    }


    $html.='</ul></div>';

    $html.='<div class="descripcion"> <h2>' . $item['nombre'] . '</h2> 
	    <p>' . $item['descripcion'] . '</p> 
        <h3>Participacion</h3><p>' . $item['participacion'] . '</p></div>';

    $html.='<div class="pie"><span> Tecnologias</span>';

    if ($itemtec['num']) {
        foreach ($itemtec['fila'] as $tecno) {
            $html.='<img src="img/tecnologias/' . $tecno['nombreid'] . '.png" title="' . $tecno['nombre'] . '" />';
        }
    }

    $html.='</div>';

    echo $html;
}



/* TRAER PROYECTOS  TRAER PROYECTOS  TRAER PROYECTOS  TRAER PROYECTOS  TRAER PROYECTOS */

if (isset($_GET['projects_cat'])) {
    $category = $_GET['projects_cat'];
    if ($category == 'favorito') {
        $projects = proyectos_favoritos();
    } else {
        $projects = projects_category($category);
    }

    $html = '';
    foreach ($projects['fila'] as $value) {
        $html .= '<article class="portafolio_item" id="' . $value['id'] . '">';
        $html .= '<div class="detalles_item_portafolio" ></div>';
        $html .= '<span class="span_detalles" ></span>';
        $html .= '<div  class="item_imagen_portafolio">';
        if (!is_dir('../img/proyectos/' . $value['tipo'] . '/' . $value['nombreid'])) {
            $value['nombreid'] = "plantilla";
            $value['tipo'] = "plantilla";
        }
        $html .= '<img src="img/proyectos/' . $value['tipo'] . '/' . $value['nombreid'] . '/pre/' . $value['nombreid'] . '.jpg" />';
        $html .= '</div>';
        $html .= '<div  class="item_titulo_portada" ><h4>' . $value['nombre'] . '</h4></div>';
        $html .= '</article>';
    }
    $html .= '<div style="clear:both;"></div>';
    echo $html;
}
?> 