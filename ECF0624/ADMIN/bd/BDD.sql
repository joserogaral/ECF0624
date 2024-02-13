CREATE DATABASE vparrot;
use vparrot;
    CREATE TABLE `garage`(
    SKU INT(11) NOT NULL AUTO_INCREMENT,
    marque VARCHAR(100),
    prix VARCHAR(100),
    km VARCHAR(100),
    details VARCHAR(1500),
    photos VARCHAR(100),
    PRIMARY KEY(`SKU`)
    )

    INSERT INTO `garage` (marque, prix, km, details, photos) VALUES ('parrot', '1000', '20714', 'info@garagevparrot.com', 'place du capotole');

    use vparrot;
    CREATE TABLE `messages`(
        ID INT(11) NOT NULL AUTO_INCREMENT,
        date DATE,
        mesage VARCHAR(100),
        prenom VARCHAR(100),
        email VARCHAR(100),
        telephone VARCHAR(50),
        PRIMARY KEY(`ID`)
    )

    INSERT INTO `messages` (date, mesage, prenom, email, telephone) VALUES ('2023-07-13', 'Je souhaite prendre rendez-vous', 'Thomas', 'Thomas@info.com', '0215252336');

    use vparrot;
    CREATE TABLE `hoyca`(
        ID INT(11) NOT NULL AUTO_INCREMENT,
        hmo VARCHAR(10),
        hmf VARCHAR(10),
        hao VARCHAR(10),
        haf VARCHAR(10),
        sut VARCHAR(100),
        sui VARCHAR(1000),
        sdt VARCHAR(100),
        sdi VARCHAR(1000),
        stt VARCHAR(100),
        sti VARCHAR(1000),
        PRIMARY KEY(`ID`)
    )

    INSERT INTO `hoyca` (hmo, hmf, hao, haf, sut, sui, sdt, sdi, stt, sti) VALUES ('09:30', '12:00', '14:00', '17:00', 'Des services assurés par des professionnels', 'Munis doutils de diagnostics multimarques, nous vérifions minutieusement l’état de votre voiture. Nous sommes en mesure de réaliser toutes les opérations mécaniques nécessaires. Nous sommes également spécialisés dans les travaux de carrosserie, de tôlerie et de peinture. Le remplacement de pare-brise figure aussi parmi nos spécialités. N’attendez plus et confiez-nous votre voiture', 'Pour une voiture performante et moins polluante', 'Nous œuvrons dans une démarche écologique et de développement durable. D’ailleurs, notre garage est labellisé ECO ENTRETIEN. Rendez-vous dans notre établissement pour contrôler l’état du moteur et de ses composants. Nous vous prodiguerons des conseils, pour réduire l’émission polluante de votre voiture. Nous veillons sur la qualité de l’entretien de votre véhicule, afin de vous garantir la fiabilité de nos prestations.', 'Le saviez vous ?', 'Jonathan Clement et son équipe ont le plaisir de vous faire découvrir leur 2ème ');

    use vparrot;
    CREATE TABLE `roles`(
        ID INT(11) NOT NULL AUTO_INCREMENT,
        rol VARCHAR(50),
        PRIMARY KEY (`ID`)
    )

    INSERT INTO `roles` (rol) VALUES ('Administrateur');
    INSERT INTO `roles` (rol) VALUES ('Employée');

    use vparrot;
    CREATE TABLE `Personnel`(
        ID INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
        nom VARCHAR(50),
        prenom VARCHAR(50),
        DDN VARCHAR(50),
        email VARCHAR(50),
        telephone VARCHAR(50),
        IDrol INT(10),
        FOREIGN KEY (IDrol) REFERENCES roles(ID),
        password VARCHAR(100),
        PRIMARY KEY (`ID`)
    )
    
    INSERT INTO `Personnel` (nom, prenom, DDN, email, telephone, IDrol, password) VALUES ('Xavier', 'Scheinder', '12/11/1995', 'Xavier@schenider', '0215488525', '1', '12345');

    use vparrot;
    CREATE TABLE `avis`(
        ID int(10) NOT NULL AUTO_INCREMENT,
        fech DATE,
        pren VARCHAR(50),
        comm VARCHAR(500),
        PRIMARY KEY (`ID`)
    )

    INSERT INTO `avis` (`ID`, `fech`, `pren`, `comm`) VALUES (NULL, '2024-02-03', 'Andre', 'Excellents prix.');
    INSERT INTO `avis` (`ID`, `fech`, `pren`, `comm`) VALUES (NULL, '2024-02-03', 'Nadine', 'Excellentes prestations');
    INSERT INTO `avis` (`ID`, `fech`, `pren`, `comm`) VALUES (NULL, '2024-02-03', 'Xavier', 'Qualité dans loffre automobile');



   