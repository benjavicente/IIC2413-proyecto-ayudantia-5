CREATE TABLE IF NOT EXISTS pokemones (
    id         serial PRIMARY KEY,
    name       varchar(50) NOT NULL,
    type       varchar(15),
    total      integer,
    hp         integer,
    attack     integer,
    defense    integer
    sp_atack   integer,
    sp_defense integer,
    speed      integer,
    legendary  boolean DEFAULT FALSE
)

CRATE TABLE IF NOT EXISTS peleas_pokemones (
    winner_id  integer REFERENCES pokemones(id),
    winner_hp  integer,
    looser_id  integer REFERENCES pokemones(id),
    looser_hp  integer,
    created_at timestamp DEFAULT CURRENT_TIMESTAMP
)
