CREATE OR REPLACE FUNCTION

-- declaramos la función y sus argumentos
mover_pokemon()

-- declaramos lo que retorna, en este caso un booleano
RETURNS void AS $$

-- declaramos las variables a utilizar
DECLARE

tupla RECORD;  

-- RECORD es un tipo (en realidad placeholder) que permite almacenar filas
-- más información sobre variables en https://www.postgresql.org/docs/9.1/plpgsql-declarations.html

-- definimos nuestra función
BEGIN

    -- verificar si existe la columna generation, si no existe la agregamos y seteamos todos los valores de esa columna en 1
    FOR tupla IN (SELECT * FROM public.dblink(
                'dbname=grupo158e3 
                port=5432 
                password=letmein 
                user=grupo158’, ‘SELECT * FROM poke2'
                ) AS f(id2 int, name varchar, type_2 varchar, total2 int, hp2 int, attack2 int, defense2 int, sp_atk2 int, sp_def2 int, speed2 int, legendary2 bool))
    
    LOOP
        IF tupla.attack2 > 100 AND 110 < tupla.speed2 AND tupla.speed2 < 150 THEN
            INSERT INTO poke1 values(tupla.id, tupla.name2, tupla.type_2, tupla.total2, tupla.hp2, tupla.attack2, tupla.defense2, tupla.sp_atk2, tupla.sp_def2, tupla.speed2, 1);
        ELSE
            INSERT INTO poke1 values(tupla.id, tupla.name2, tupla.type_2, tupla.total2, tupla.hp2, tupla.attack2, tupla.defense2, tupla.sp_atk2, tupla.sp_def2, tupla.speed2, tupla.legendary2);
        END IF;
    END LOOP;


-- finalizamos la definición de la función y declaramos el lenguaje
END
$$ language plpgsql