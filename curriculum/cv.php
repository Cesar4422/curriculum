<?php
// Datos personales
$nombre = "Pablo Cesar Nava Garfias";
$direccion = "Calle Ejemplo #123, Ciudad, Estado";
$curp = "NAGP030422HMCVRBA2";
$rfc = "NAGP030422HM";
$email = "lolo12@gmail.com";
$telefono = "+52 55-6504-2725";
$foto = "caw.jpeg";

// Educación con período y teléfono de contacto
$educacion = [
    "Primaria" => ["Escuaela Primaria Generalisimo Morelos", "2009 - 2015", "Tel: +52 555-111-2222"],
    "Secundaria" => ["Escuela Secundaria Felipe Neri Villarello", "2015 - 2018", "Tel: +52 55-2312-3467"],
    "Preparatoria" => ["Preparatoria Oficial Num. 24", "2018 - 2021", "Tel: +52 555-555-6666"],
    "Universidad" => ["Tecnologico de Estudios Superiores de Huixquilucan", "2021 - 2026", "Tel: +52 55-4521-5634"]
];

// Experiencia laboral
$experiencia = [
    "Participacion en Hackathon ETH Cinco de Mayo (2025)",
    "Pariticipacion en HackaTecnm (2025)",
    "Diseño de experiencia de usuariio UX"
];

$habilidades = ["MySQL", "HTML & CSS", "Figma"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Currículum de <?php echo $nombre; ?></title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f4; }
        header { background-color: #0073e6; color: white; padding: 20px; }
        .foto img { width: 150px; border-radius: 50%; margin: 20px auto; }
        section { margin: 20px; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        footer { margin-top: 20px; padding: 10px; background-color: #0073e6; color: white; }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $nombre; ?></h1>
        <h2>Ingenerio en Sistemas Computacionales</h2>
    </header>

    <section class="foto">
        <img src="<?php echo $foto; ?>" alt="Foto de <?php echo $nombre; ?>">
    </section>

    <section class="info">
        <h3>Información Personal</h3>
        <p><strong>Dirección:</strong> <?php echo $direccion; ?></p>
        <p><strong>CURP:</strong> <?php echo $curp; ?></p>
        <p><strong>RFC:</strong> <?php echo $rfc; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $telefono; ?></p>
    </section>

    <section class="educacion">
        <h3>Educación</h3>
        <?php foreach ($educacion as $nivel => $datos) { ?>
            <div>
                <h4><?php echo $nivel; ?></h4>
                <p><strong>Institución:</strong> <?php echo $datos[0]; ?></p>
                <p><strong>Período:</strong> <?php echo $datos[1]; ?></p>
                <p><strong>Contacto:</strong> <?php echo $datos[2]; ?></p>
            </div>
        <?php } ?>
    </section>

    <section class="experiencia">
        <h3>Experiencia Laboral</h3>
        <ul>
            <?php foreach ($experiencia as $trabajo) {
                echo "<li>$trabajo</li>";
            } ?>
        </ul>
    </section>

    <section class="habilidades">
        <h3>Habilidades</h3>
        <ul>
            <?php foreach ($habilidades as $habilidad) {
                echo "<li>$habilidad</li>";
            } ?>
        </ul>
    </section>

    <footer>
        <p>&copy; 2025 <?php echo $nombre; ?> - Todos los derechos reservados</p>
    </footer>
</body>
</html>
