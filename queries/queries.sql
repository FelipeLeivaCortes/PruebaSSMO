SELECT f.rut_funcionario, f.nombre_funcionario,  YEAR(CURDATE()) - YEAR(f.fecha_nacimiento_funcionario) AS edad FROM funcionarios AS f
    WHERE f.estado_funcionario = 1 ORDER BY f.fecha_nacimiento_funcionario ASC;

SELECT SUBSTRING_INDEX(f.nombre_funcionario, ' ', 1) AS nombre_funcionario, SUBSTRING_INDEX(f.nombre_funcionario, ' ', 2) AS apellido_funcionario,
    CHARACTER_LENGTH(f.nombre_funcionario) AS caracteres FROM funcionarios AS f WHERE f.estado_funcionario = 0;

SELECT f.rut_funcionario, f.nombre_funcionario, f.direccion_funcionario FROM funcionarios AS f WHERE (f.direccion_funcionario LIKE "Av%" OR 
f.direccion_funcionario LIKE "Calle%") AND YEAR(CURDATE()) - YEAR(f.fecha_nacimiento_funcionario) > 30;