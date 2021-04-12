<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Graficos;
use Inertia\Inertia;
use Illuminate\Http\Request;

class GraficosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql = "SELECT mediciones.id, CONCAT(nombre_cliente,' - ',nombre_dispositivo,' - ',nombre_medicion) AS dispositivo 
        FROM dispositivos
        INNER JOIN mediciones ON dispositivos.id = mediciones.id_dispositivo
        INNER JOIN clientes ON dispositivos.id_cliente = clientes.id
        WHERE tipo_dato=1 AND dispositivos.estado = 0 AND mediciones.estado = 0 
        ORDER by nombre_cliente";

    

        $data = DB::connection('mysql')->select(DB::raw($sql));

        return Inertia::render('Graficos/Index', compact('data'));
        /*
        // Simple example
        $chart = (new \ArielMejiaDev\LarapexCharts\LarapexChart())->areaChart()
        ->setTitle('Users')
        ->addArea('Active users', [10, 30, 25])
        ->addArea('Inactive users', [5, 15, 35])
        ->setColors(['#ffc63b', '#ff6384'])
        ->toVue();


        return Inertia::render('Graficos/Index', compact('chart'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contador = 0;
		$body = '<div class="row">';
		$colores = array('blue','green-meadow','red','default','grey-mint','yellow-mint','blue-hoki','yellow-crusta');

        $id_mediciones = implode(",",$request->selected);

        $sql = "SELECT mediciones.id, id_dispositivo, nombre_medicion,valor_ingenieria,divisor,tipo_dato,nombre_dato_bd, nombre_dispositivo,nombre_bd, tipo_grafico
		FROM mediciones 
		INNER JOIN dispositivos ON dispositivos.id=mediciones.id_dispositivo
		WHERE mediciones.estado = 0 AND mediciones.id IN (".$id_mediciones.")
		AND tipo_dato = 1
		ORDER by nombre_medicion DESC";


        $lista_mediciones_graficos = DB::connection('mysql')->select(DB::raw($sql));


		$contador_grafico = 0;		
		$js_body = '';

        $cantidad_analogicos = count($lista_mediciones_graficos);
        $colores = array('blue','green-meadow','red','default','grey-mint','yellow-mint','blue-hoki','yellow-crusta');


        foreach($lista_mediciones_graficos as $lista){
            $id_medicion = $lista->id;																			
			$id_dispositivo = $lista->id_dispositivo;			
			$nombre_medicion = $lista->nombre_medicion;			
			$valor_ingenieria = $lista->valor_ingenieria;			
			$divisor = $lista->divisor;			
			$tipo_dato = $lista->tipo_dato;			
			$nombre_dato_bd = $lista->nombre_dato_bd;			
			$nombre_dispositivo = $lista->nombre_dispositivo;			
			$nombre_bd_dispositivo = $lista->nombre_bd;			
			$tipo_grafico = $lista->tipo_grafico;			
			

            
			if($valor_ingenieria=='0'){ $valor_ingenieria = ''; }		
            
            $nombre_dato_bd_full = explode(',',$nombre_dato_bd);
			$contador_nombre_dato_bd = COUNT($nombre_dato_bd_full);

            $sql2 = "SELECT mt_name, mt_value, mt_time
			FROM ".$nombre_bd_dispositivo."
			-- WHERE mt_name = '".$nombre_dato_bd."'
			ORDER BY mt_id DESC
			LIMIT 1";

            $lista_busca_data_graficos = DB::connection('mysql2')->select(DB::raw($sql2));
            

            $mt_name = $lista_busca_data_graficos[0]->mt_name;
            $mt_time = $lista_busca_data_graficos[0]->mt_time;
		
            if($cantidad_analogicos==$contador_grafico && $contador_grafico>1 && $contador_grafico%2==0){
				$columna = 12;
			}
			else if($cantidad_analogicos==$contador_grafico && $contador_grafico==0 && $cantidad_analogicos==0){
				$columna = 12;
			}
			else{
				$columna = 6;
			}

            
            if($tipo_grafico==1){	
				$mt_time_full = explode(':',$mt_time);
				$mt_time_inicio = $mt_time_full[0].':00:00';
				$mt_time_fin = $mt_time_full[0].':59:59';
                
                $sql3 = "SELECT * FROM (
				
                    SELECT MAX(mt_value) As maximo_valor,MIN(mt_value) AS valor_minimo, 
                    if(MIN(mt_id)=mt_id,mt_value,'') AS primer_valor,
                        (SELECT mt_value FROM ".$nombre_bd_dispositivo."
                        WHERE mt_name = '".$nombre_dato_bd."'
                        AND mt_time BETWEEN '".$mt_time_inicio."' AND '".$mt_time_fin."'
                        ORDER BY mt_id DESC LIMIT 1) AS ultimo_valor,
                    DATE_FORMAT(mt_time,'%Y-%m-%d %H:00:00') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time BETWEEN '".$mt_time_inicio."' AND '".$mt_time_fin."'			
                                    
                    UNION ALL ";
                    
                    for($a=1;$a<=24;$a++){

                        $sql3 .="SELECT MAX(mt_value) As maximo_valor,MIN(mt_value) AS valor_minimo, 
                        if(MIN(mt_id)=mt_id,mt_value,'') AS primer_valor,
                            (SELECT mt_value FROM ".$nombre_bd_dispositivo."
                            WHERE mt_name = '".$nombre_dato_bd."'
                            AND mt_time BETWEEN DATE_SUB('".$mt_time_inicio."', INTERVAL ".$a." HOUR) AND DATE_SUB('".$mt_time_fin."', INTERVAL ".$a." HOUR)
                            ORDER BY mt_id DESC LIMIT 1) AS ultimo_valor,
                        DATE_FORMAT(mt_time,'%Y-%m-%d %H:00:00') AS mt_time
                        FROM ".$nombre_bd_dispositivo."
                        WHERE mt_name = '".$nombre_dato_bd."'
                        AND mt_time BETWEEN DATE_SUB('".$mt_time_inicio."', INTERVAL ".$a." HOUR) AND DATE_SUB('".$mt_time_fin."', INTERVAL ".$a." HOUR)
        
                        UNION ALL ";
                        
                    }
                    $sql3 = substr($sql3, 0, -10);
                    $sql3 = $sql3.' ) AS datos ';
                    $lista_data_graficos = DB::connection('mysql2')->select(DB::raw($sql3));

                    
				
                    $body .= '	<div class="col-lg-'.$columna.' col-xxl-'.$columna.'">
                                <!--begin::Advance Table Widget 9-->
                                <div class="card card-custom card-stretch gutter-b">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 py-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label font-weight-bolder text-dark">'.$nombre_medicion.'</span>
                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">Últimas 24 horas de datos desplegados</span>
                                        </h3>
                                    </div>
                                            
                                                <div id="grafico'.$contador_grafico.'" style="width:98%"></div>
                                            
                                </div>
                            </div>';	

                $js_body .= 'var options'.$contador_grafico.' = {
                series: [{
                data: [';

                foreach ($lista_data_graficos as $lista2) {
                    $maximo_valor = ROUND(($lista2->maximo_valor/$divisor),1);
					$valor_minimo = ROUND(($lista2->valor_minimo/$divisor),1);
					$primer_valor = ROUND(($lista2->primer_valor/$divisor),1);
					$ultimo_valor = ROUND(($lista2->ultimo_valor/$divisor),1);
					$mt_hora = $lista2->mt_time;							
							
					$js_body .= '{
					  x: "'.$mt_hora.'",
					  y: ['.$primer_valor.', '.$maximo_valor.', '.$valor_minimo.', '.$ultimo_valor.']
					},';

                }

                $js_body .='  ]
				}],
				  chart: {
				  type: "candlestick",
				  height: 350                                             
				},
				xaxis: {
				  type: "datetime"
				},
				yaxis: {
				  tooltip: {
					enabled: true
				  }
				}
				};
				
				var chart'.$contador_grafico.' = new ApexCharts(document.querySelector("#grafico'.$contador_grafico.'"), options'.$contador_grafico.');
				chart'.$contador_grafico.'.render();
				';
					


            }
            elseif ($tipo_grafico==2) {
                $mt_time_full = explode(':',$mt_time);
				$mt_time_inicio = $mt_time_full[0].':00:00';
				$mt_time_fin = $mt_time_full[0].':59:59';
				$mt_time_final = $mt_time_full[0].':'.$mt_time_full[1];
				
                $sql3 = "SELECT DATE_FORMAT('".$mt_time."','%Y-%m-%d %H:%i:00') AS mt_time, ";

                for($aae=0;$aae<$contador_nombre_dato_bd;$aae++){
					$sql3 .=" (SELECT COALESCE(MAX(mt_value),0) FROM ".$nombre_bd_dispositivo." WHERE mt_name='".$nombre_dato_bd_full[$aae]."' AND mt_time = '".$mt_time."' limit 1) AS a".$aae.",	";																																					
				}
				$sql3 = substr($sql3, 0, -2);			
				$sql3 .=" UNION ALL ";
				
				for($a=1;$a<=1440;$a++){

					$sql3 .=" SELECT DATE_FORMAT(DATE_SUB('".$mt_time."', INTERVAL ".$a." MINUTE),'%Y-%m-%d %H:%i:00') AS mt_time, ";
					
					for($ai=0;$ai<$contador_nombre_dato_bd;$ai++){
						$sql3 .=" (SELECT COALESCE(MAX(mt_value),0) FROM ".$nombre_bd_dispositivo." WHERE mt_name='".$nombre_dato_bd_full[$ai]."' AND mt_time = DATE_SUB('".$mt_time."', INTERVAL ".$a." MINUTE) limit 1) AS a".$ai.", ";																																					
					}
					$sql3 = substr($sql3, 0, -2);			
					$sql3 .=" UNION ALL ";					
						
				}
                
				$sql3 = substr($sql3, 0, -10);

            
                $lista_busca_data_graficos = DB::connection('mysql2')->select(DB::raw($sql3));
                

                $body .= '	<div class="col-lg-'.$columna.' col-xxl-'.$columna.'">
								<!--begin::Advance Table Widget 9-->
								<div class="card card-custom card-stretch gutter-b">
									<!--begin::Header-->
									<div class="card-header border-0 py-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label font-weight-bolder text-dark">'.$nombre_medicion.'</span>
											<span class="text-muted mt-3 font-weight-bold font-size-sm">Últimas 24 horas cada 1 minuto de datos desplegados</span>
										</h3>
									</div>
											
												<div id="grafico'.$contador_grafico.'" style="width:98%"></div>
											
								</div>
							</div>';	
                
                for($ai=0;$ai<$contador_nombre_dato_bd;$ai++){
                    ${"serie".$ai} = '';
                }
                
                        
                $hora = '';
                $cont = 1;

                foreach ($lista_busca_data_graficos as $row_data_graficos ) {
                    $mt_hora_full = explode(' ',$row_data_graficos->mt_time);	
					$mt_hora = $mt_hora_full[0].'T'.$mt_hora_full[1];					
					$hora = $hora.'"'.$mt_hora.'.000Z",';				
				
						/*$file = fopen("archivo.txt", "a");
						fwrite($file, $hora . PHP_EOL);
						fclose($file);	*/			
				
					for($ai=0;$ai<$contador_nombre_dato_bd;$ai++){
						$nombre_variable = 'a'.$ai;
						$contador = ROUND(($row_data_graficos->$nombre_variable/$divisor),2);
						${"serie".$ai} = ${"serie".$ai}.$contador.',';
						
						/*$file = fopen("archivo.txt", "a");
						fwrite($file, ${"serie".$ai} . PHP_EOL);
						fclose($file);*/
						
					}						
					

					$cont++;
                }


				$js_body .= 'var options'.$contador_grafico.' = {
                    series: [';
                    
                    for($ai=0;$ai<$contador_nombre_dato_bd;$ai++){
                        
                        $nombre_full = explode('.',$nombre_dato_bd_full[$ai]);
                        
                        $js_body .= '{
                          name: "'.strtoupper($nombre_full[1]).'",
                          data: ['.substr(${"serie".$ai}, 0, -1).']
                        },';
                        
                        /*$file = fopen("archivo.txt", "a");
                        fwrite($file, $js_body . PHP_EOL);
                        fclose($file);*/
                        
                    }
                    $js_body = substr($js_body, 0, -1);
    
                    
                    $js_body .='],
                      chart: {
                      height: 350,
                      type: "area"
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: "smooth"
                    },
                    xaxis: {
                      type: "datetime",
                      categories: ['.substr($hora, 0, -1).']
                    },
                    tooltip: {
                      x: {
                        format: "dd/MM/yy HH:mm"
                      },
                    },
                    };
                    
                    var chart'.$contador_grafico.' = new ApexCharts(document.querySelector("#grafico'.$contador_grafico.'"), options'.$contador_grafico.');
                    chart'.$contador_grafico.'.render();				
                                            
                    ';		
            }
            else{
                $sql3 = "SELECT * FROM (
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time='".$mt_time."'
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 1 HOUR)
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 2 HOUR)
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 3 HOUR)
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 4 HOUR)
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 5 HOUR)
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 6 HOUR)
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 7 HOUR)
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 8 HOUR)
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 9 HOUR)
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 10 HOUR)
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 11 HOUR)
    
                    UNION ALL
    
                    SELECT mt_id, mt_value, DATE_FORMAT(mt_time,'%H:%i') AS mt_time
                    FROM ".$nombre_bd_dispositivo."
                    WHERE mt_name = '".$nombre_dato_bd."'
                    AND mt_time=DATE_SUB('".$mt_time."', INTERVAL 12 HOUR)
                    ) AS datos
                    ORDER BY mt_id ASC";
    
                $lista_data_graficos = DB::connection('mysql2')->select(DB::raw($sql3));

				$js_body .= '
				initAmChart'.$contador_grafico.': function() {
				
					var chart = AmCharts.makeChart("grafico'.$contador_grafico.'", {
						"type": "serial",
						"addClassNames": true,
						"theme": "light",
						"path": "../assets/global/plugins/amcharts/ammap/images/",
						"autoMargins": false,
						"marginLeft": 70,
						"marginRight": 8,
						"marginTop": 10,
						"marginBottom": 26,
						"balloon": {
							"adjustBorderColor": false,
							"horizontalPadding": 10,
							"verticalPadding": 8,
							"color": "#ffffff"
						},

						"dataProvider": [';
                foreach ($lista_data_graficos as $lista_data_graficos) {
                    $mt_value = $row_data_graficos->mt_value;
                    $mt_hora = $row_data_graficos->mt_time;							
                    
                    $js_body .= '{
                    "year": "'.$mt_hora.'",';
                                    
                    $js_body .= '"expenses": '.ROUND(($mt_value/$divisor),2).'
                    },';	
                }

						
						$js_body = substr($js_body, 0, -2);
						$js_body .= ',"bulletClass": "lastBullet"}';
						
						$js_body .= '],
						"valueAxes": [{
							"title": "'.$valor_ingenieria.'",
							"axisAlpha": 0,
							"position": "left"
						}],
						"startDuration": 1,
						"graphs": [ {
							"id": "graph2",
							"classNameField": "bulletClass",
							"balloonText": "<span style=\'font-size:12px;\'>[[title]] a las [[category]]:<br><span style=\'font-size:20px;\'>[[value]] '.$valor_ingenieria.'</span> [[additional]]</span>",
							"bullet": "round",
							"lineThickness": 3,
							"bulletSize": 7,
							"bulletBorderAlpha": 1,
							"bulletColor": "#FFFFFF",
							"useLineColorForBulletBorder": true,
							"bulletBorderThickness": 3,
							"fillAlphas": 0,
							"lineAlpha": 1,
							"title": "Registro",
							"valueField": "expenses"
						}],
						"categoryField": "year",
						"categoryAxis": {
							"gridPosition": "start",
							"axisAlpha": 0,
							"tickLength": 0
						},
						"export": {
							"enabled": true
						}	
					
					});
				
				},';
                
            }
            $contador_grafico++;
            
        }

         $body .= '</div>--**--'.$js_body.'--**--'.$contador_grafico.'--**--'.$sql3;

/*
         return Inertia::render('Graficos/Index', [
             'body' => $body
         ]);*/
		
         return $body;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Graficos  $graficos
     * @return \Illuminate\Http\Response
     */
    public function show(Graficos $graficos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Graficos  $graficos
     * @return \Illuminate\Http\Response
     */
    public function edit(Graficos $graficos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Graficos  $graficos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Graficos $graficos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Graficos  $graficos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Graficos $graficos)
    {
        //
    }
}
