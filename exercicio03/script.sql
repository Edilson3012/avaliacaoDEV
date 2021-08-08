
SELECT 	CONCAT(u.nome, ' - ', i.genero ) AS usuário, i.ano_nascimento,
			IF(i.ano_nascimento > 1970, 'NÃO', 'SIM' ) AS 'maior_50_anos'
FROM usuario AS u
INNER JOIN info AS i ON i.cpf = u.cpf
WHERE i.genero = 'M' AND i.ano_nascimento IN (1972,1976,1954)
ORDER BY u.nome DESC;
