INSERT INTO rap_type_projet (TP_INTITULE) VALUES
('Album'),
('EP'),
('Mixtape'); 

INSERT INTO rap_artiste (ART_DENOMINATION, ART_NOM, ART_PRENOM, ART_DATE_NAISSANCE, ART_DATE_MORT, ART_NATIONALITE, ART_VILLE_ORIGINE, ART_BIOGRAPHIE) VALUES
('Rohff', 'Mkouboi', 'Housni', '1977-12-15', NULL, 'Française', 'Vitry-sur-Seine', 'Rohff est un rappeur français d\'origine comorienne. Il est connu pour ses textes percutants et son flow incisif.'),
('Jul', 'Mari', 'Julien', '1990-01-14', NULL, 'Française', 'Marseille', 'Jul est un rappeur marseillais à l\'origine d\'un mouvement indépendant qui a explosé dans le rap français.'),
('Ninho', 'Nzobazola', 'William', '1996-04-02', NULL, 'Française', 'Longjumeau', 'Ninho est un rappeur français très influent, connu pour ses albums à succès et son impact sur la nouvelle génération.'),
('SCH', 'Schwarzer', 'Julien', '1993-04-06', NULL, 'Française', 'Marseille', 'SCH est un rappeur français au style sombre et inspiré de la culture mafieuse.'),
('Gazo', 'Diakité', 'Ibrahima', '1994-08-05', NULL, 'Française', 'Châteauroux', 'Gazo est un rappeur français spécialisé dans la drill, un style venu de Chicago et popularisé en France.'),
('Kaaris', 'Okou Gnakouri ', 'Armand ', '1980-01-30', NULL, 'Française', 'Sevran', 'Kaaris est un rappeur français d\'origine ivoirienne, connu pour son style hardcore et son rôle dans l\'explosion de la trap en France.'),
('Vald', 'Le Du', 'Valentin', '1992-07-15', NULL, 'Française', 'Aulnay-sous-Bois', 'Vald est un rappeur français connu pour son humour décalé et son style expérimental.'),
('Orelsan', 'Cotentin', 'Aurélien', '1982-08-01', NULL, 'Française', 'Caen', 'Orelsan est un rappeur français ayant marqué le rap avec ses textes cyniques et ses réflexions sur la société.'),
('Ziak', NULL, NULL, NULL, NULL, 'Française', 'Évry', 'Ziak est un rappeur français anonyme, connu pour son style drill et son identité masquée.'),
('Freeze Corleone', 'Issa Diakhaté', 'Lorenzo', '1992-06-06', NULL, 'Française', 'Les Lilas', 'Freeze Corleone est un rappeur français affilié au 667, connu pour ses références ésotériques et ses textes cryptiques.'),
('Laylow', 'Larroux', 'Jérémy', '1993-03-12', NULL, 'Française', 'Toulouse', 'Laylow est un rappeur français au style futuriste, mêlant rap et nouvelles technologies.'),
('Niska', 'Malif Dinga-Pinto', 'Georges', '1994-04-06', NULL, 'Française', 'Évry', 'Niska est un rappeur français connu pour ses hits clubs et son énergie sur scène.'),
('SDM', 'Manzambi', 'Leonard ', '1995-11-28', NULL, 'Française', 'Clamart', 'SDM est un rappeur signé chez 92i, avec un style mélodieux et street.'),
('Tiakola', 'Mundala', 'William', '1999-12-04', NULL, 'Française', 'Bondy', 'Tiakola est un rappeur et chanteur français connu pour son flow mélodieux et sa voix unique.'),
('Hornet La Frappe', 'Ben Chettouh', 'Mounir ', '1991-12-05', NULL, 'Française', 'Epinay-sur-Seine', 'Hornet La Frappe est un rappeur français influencé par la rue et le storytelling.'),
('Dinos', 'Jomby', 'Jules', '1993-11-30', NULL, 'Française', 'La Courneuve', 'Dinos est un rappeur français connu pour sa plume travaillée et sa mélancolie.'),
('Josman', 'José' , 'Nzengu', '1992-10-28', NULL, 'Française', 'Vierzon', 'Josman est un rappeur indépendant français au flow versatile.'),
('Hugo TSR', NULL, NULL, NULL, NULL, 'Française', 'Paris', 'Hugo TSR est un rappeur underground parisien, membre du TSR Crew.'),
('Soolking', 'Derradji', 'Abderraouf', '1989-12-10', NULL, 'Algérienne', 'Alger', 'Soolking est un rappeur franco-algérien mélangeant rap et raï.'),
('Sadek', 'Bourguiba', 'Sadek', '1991-05-25', NULL, 'Française', 'Neuilly-Plaisance', 'Sadek est un rappeur français connu pour sa polyvalence musicale.'),
('Alpha Wann', 'Wann', 'Alpha', '1989-07-02', NULL, 'Française', 'Paris', 'Alpha Wann est un rappeur du groupe 1995, reconnu pour sa technique.'),
('Guizmo', 'Diakité', 'Lamine', '1991-01-21', NULL, 'Française', 'Villeneuve-la-Garenne', 'Guizmo est un rappeur à la plume sensible et introspective.'),
('PLK', 'Pruski', 'Mathieu', '1997-04-15', NULL, 'Française', 'Clamart', 'PLK est un rappeur franco-polonais ayant percé grâce à son charisme et son flow.'),
('Zola', 'Zola', 'Aurélien', '1999-11-16', NULL, 'Française', 'Évry', 'Zola est un rappeur français à l’univers énergique et inspiré par la trap.'),
('Rim\'K', 'Brahmi', 'Abdelkarim', '1978-06-21', NULL, 'Française', 'Vitry-sur-Seine', 'Rim\'K est un vétéran du rap français, membre du groupe 113.'),
('Booba', 'Yaffa', 'Elie', '1976-12-09', NULL, 'Française', 'Sevres', 'Booba, de son vrai nom Élie Yaffa, est un rappeur, acteur et entrepreneur français. Il est également le fondateur du 92i, collectif regroupant initialement des rappeurs issus des Hauts-de-Seine.'),
('B.B. Jacques', '', '', NULL, NULL, 'Française', 'Courbevoie', '');

INSERT INTO rap_projet_musical (TP_CODE, ART_ID, PRO_TITRE, PRO_DISTRIBUTEUR, PRO_DATE_SORTIE) VALUES
(1, 26, 'Trône', 'Capitol', '2017-12-01'),
(1, 1, 'Surnaturel', 'Believe', '2018-12-14'),
(1, 2,'La Machine', 'D\'or et de Platine', '2020-06-19'),
(1, 3,'Destin', 'Rec. 118', '2019-03-22'),
(1, 4,'JVLIVS', 'Maison Baron Rouge', '2018-10-19'),
(1, 5,'Drill FR', 'Epic Records', '2021-02-26'),
(1, 6,'Or Noir', 'Therapy Music', '2013-10-21'),
(1, 7,'XEU', 'Universal', '2018-02-02'),
(1, 8,'Civilisation', 'Wagram Music', '2021-11-19'),
(1, 27, 'Blackbird', 'Warner Music France', '2024-10-04'),
(1, 27, 'NEW BLUES, OLD WINE', 'ADA France', '2022-12-02');

