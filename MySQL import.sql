# Таблица для реферальных ссылок
# -------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE table_links (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    add_time varchar(256),
    owner varchar(256),
    url_link varchar(256)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO table_links (add_time, owner, url_link) VALUES ('1554724375', 'Сергей Шевченко', 'https://switips.com/?u=shevchenkosk');
INSERT INTO table_links (add_time, owner, url_link) VALUES ('1554724375', 'Михаил Рогашевский', 'https://switips.com/?u=Misha_official');
INSERT INTO table_links (add_time, owner, url_link) VALUES ('1554724375', 'Иван Смирнов', 'https://switips.com/?u=plusheviy');

# Таблица для записи переходов по реферальным ссылкам
# -------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE table_links_history (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    url_id varchar(256),
    url_link varchar(256),
    data varchar(256),
    browser varchar(256)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

# Таблица для пользователей
# -------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE table_account (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    login varchar(256),
    password varchar(256),
    reg_date varchar(256),
    username_a varchar(256),
    username_b varchar(256),
    username_c varchar(256),
    access varchar(256)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO table_account (login, password, reg_date, username_a, username_b, username_c, access) VALUES ('sergey', '12345678', '1555867722', 'Сергей', 'Шевченко', '', 'full');
INSERT INTO table_account (login, password, reg_date, username_a, username_b, username_c, access) VALUES ('ivan', '12345678', '1555867722', 'Иван', 'Смирнов', '', 'full');
INSERT INTO table_account (login, password, reg_date, username_a, username_b, username_c, access) VALUES ('michael', '12345678', '1555867722', 'Михаил', 'Рогашевский', '', 'full');
INSERT INTO table_account (login, password, reg_date, username_a, username_b, username_c, access) VALUES ('alexey', '12345678', '1555867722', 'Алексей', 'Будяк', '', 'full');

# Таблица для записи пользовательских сессий
# -------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE table_account_sessions (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    login varchar(256),
    data varchar(256),
    browser varchar(256)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;