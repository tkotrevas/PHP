<?php 

$hierarquia= array(
array(
'nome_cargo'=>'CEO',
'subordinados'=>array(
		array(
		'nome_cargo'=>'Diretor',
		'subordinados'=>array(

						array(
                        'nome_cargo'=>'Funcionario_Diretor'
                    )

		)

),

		array(
			'nome_cargo'=>'Gerente',
			'subordinados'=>array(
							array(
                        'nome_cargo'=>'Funcionario_Gerente'
                    )

			)


		),

		array(

			'nome_cargo'=>'Supervisor',
			'subordinados'=>array(

							array(
                        'nome_cargo'=>'Funcionario_Supervisor'
                    )


)))
	
)
);

function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo[ 'nome_cargo' ];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);

        }

        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;

}

echo exibe($hierarquia);

?>