
CREATE TABLE FestivalEvent (
    FestivalEventID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    Description TEXT,
    ImgPath VARCHAR(100),
    StartDate DATE,
    EndDate DATE
);


ALTER TABLE FestivalEvent
    MODIFY COLUMN StartDate DATETIME,
    MODIFY COLUMN EndDate DATETIME;


INSERT INTO FestivalEvent (Name, Description, ImgPath, StartDate, EndDate)
VALUES ('Haarlem Jazz', 'Haarlem Jazz, a cornerstone of our city\'s festival calendar, comes alive as we revive past echoes at Patronaat. Join us in this musical journey, where renowned bands recreate the festival\'s essence. Feel the vibrant rhythms and melodies on Sunday at Grote Markt, where bands perform for all, free of charge!', '/img/jazz/jazzHeader.png', '2023-07-27', '2023-07-31');


ALTER TABLE FestivalEvent
    ADD COLUMN Title VARCHAR(255);


UPDATE FestivalEvent
SET Title = 'Festival in Haarlem 2023 schedule'
WHERE FestivalEventID = 1;


CREATE TABLE Venue (
    VenueID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    Address VARCHAR(100),
    ContactDetails TEXT
);

ALTER TABLE Venue
DROP COLUMN Email;


INSERT INTO Venue (Name, Address, Email, ContactDetails)
VALUES
    ('Patronaat', 'Zijlsingel 2, 2013 DN', 'info@patronaat.nl', 'phone: 023 - 517 58 50 (office) - during office hours 10.00 - 17.00, 023 - 517 58 58 (cash desk/information number)'),
    ('Grote Markt', 'Grote Markt 2011 RD', NULL, NULL);


CREATE TABLE JazzDay (
    DayID INT AUTO_INCREMENT PRIMARY KEY,
    Date DATE,
    ImgPath VARCHAR(100),
    VenueID INT,
    Note TEXT,
    FOREIGN KEY (VenueID) REFERENCES Venue(VenueID)
);

INSERT INTO JazzDay (Date, ImgPath, VenueID, Note)
VALUES
    ('2023-07-26', '/img/jazz/jazzDay1.png', 1, 'All-Access pass for this day €35,00, All-Access pass for Thu,Fri, Sat: €80,00.'),
    ('2023-07-27', '/img/jazz/jazzDay2.png', 1, 'All-Access pass for this day €35,00, All-Access pass for Thu,Fri, Sat: €80,00.'),
    ('2023-07-28', '/img/jazz/jazzDay3.png', 1, 'All-Access pass for this day €35,00, All-Access pass for Thu,Fri, Sat: €80,00.'),
    ('2023-07-29', '/img/jazz/jazzDay4.png', 2, 'Free for all visitors. No reservation needed.');



CREATE TABLE Performance (
    PerformanceID INT AUTO_INCREMENT PRIMARY KEY,
    ArtistID INT,
    Price DECIMAL(10, 2),
    StartDateTime DATETIME,
    EndDateTime DATETIME,
    TotalTickets INT,
    AvailableTickets INT,
    DayID INT,
    Details VARCHAR(50),
    FOREIGN KEY (ArtistID) REFERENCES Artist(ArtistID),
    FOREIGN KEY (DayID) REFERENCES JazzDay(DayID)
);

ALTER TABLE Performance
ADD COLUMN TotalTickets INT;

ALTER TABLE Performance
RENAME COLUMN Hall TO Details;

ALTER TABLE Performance
DROP COLUMN VenueID;


INSERT INTO Performance (ArtistID, Price, StartDateTime, EndDateTime, AvailableTickets, DayID, VenueID, Hall, PerformanceImg)
VALUES
    (1, 15.00, '2023-07-26 18:00', '2023-07-26 19:00', 300, 1, 1, 'Main Hall', '/img/jazz/performances/gumboKings.png'),
    (2, 15.00, '2023-07-26 19:30', '2023-07-26 20:30', 300, 1, 1, 'Main Hall', '/img/jazz/performances/evolve.png'),
    (3, 15.00, '2023-07-26 21:00', '2023-07-26 22:00', 300, 1, 1, 'Main Hall', '/img/jazz/performances/ntjamRosie.png'),

    (4, 10.00, '2023-07-26 18:00', '2023-07-26 19:00', 200, 1, 1, 'Second Hall', '/img/jazz/performances/wickedJazzSounds.png'),
    (5, 10.00, '2023-07-26 19:30', '2023-07-26 20:30', 200, 1, 1, 'Second Hall', '/img/jazz/performances/tomThompsonAssemble.png'),
    (6, 10.00, '2023-07-26 21:00', '2023-07-26 22:00', 200, 1, 1, 'Second Hall', '/img/jazz/performances/jonnaFrazer.png'),

    (7, 15.00, '2023-07-27 18:00', '2023-07-27 19:00', 300, 2, 1, 'Main Hall', '/img/jazz/performances/foxAndTheMayors.png'),
    (8, 15.00, '2023-07-27 19:30', '2023-07-27 20:30', 300, 2, 1, 'Main Hall', '/img/jazz/performances/uncleSue.png'),
    (9, 15.00, '2023-07-27 21:00', '2023-07-27 22:00', 300, 2, 1, 'Main Hall', '/img/jazz/performances/chrisAllen.png'),

    (10, 10.00, '2023-07-27 18:00', '2023-07-27 19:00', 200, 2, 1, 'Second Hall', '/img/jazz/performances/MylesSanko.png'),
    (11, 10.00, '2023-07-27 19:30', '2023-07-27 20:30', 200, 2, 1, 'Second Hall', '/img/jazz/performances/ruisSoundsystem.png'),
    (12, 10.00, '2023-07-27 21:00', '2023-07-27 22:00', 200, 2, 1, 'Second Hall', '/img/jazz/performances/theFamilyXL.png'),

    (13, 15.00, '2023-07-28 18:00', '2023-07-28 19:00', 300, 3, 1, 'Main Hall', '/img/jazz/performances/gareDuNord.png'),
    (14, 15.00, '2023-07-28 19:30', '2023-07-28 20:30', 300, 3, 1, 'Main Hall', '/img/jazz/performances/rilanAndTheBombadiers.png'),
    (15, 15.00, '2023-07-28 21:00', '2023-07-28 22:00', 300, 3, 1, 'Main Hall', '/img/jazz/performances/soulSix.png'),

    (16, 10.00, '2023-07-28 18:00', '2023-07-28 19:00', 200, 3, 1, 'Second Hall', '/img/jazz/performances/hannBennink.png'),
    (17, 10.00, '2023-07-28 19:30', '2023-07-28 20:30', 200, 3, 1, 'Second Hall', '/img/jazz/performances/theNordanians.png'),
    (18, 10.00, '2023-07-28 21:00', '2023-07-28 22:00', 200, 3, 1, 'Second Hall', '/img/jazz/performances/lilithMerlot.png'),

    (11, NULL, '2023-07-29 15:00', '2023-07-29 16:00', NULL, 4, 2, NULL, '/img/jazz/performances/ruisSoundsystem.png'),
    (4, NULL, '2023-07-29 16:00', '2023-07-29 17:00', NULL, 4, 2, NULL, '/img/jazz/performances/wickedJazzSounds.png'),
    (2, NULL, '2023-07-29 17:00', '2023-07-29 18:00', NULL, 4, 2, NULL, '/img/jazz/performances/evolve.png'),

    (17, NULL, '2023-07-29 18:00', '2023-07-29 19:00', NULL, 4, 2, NULL, '/img/jazz/performances/theNordanians.png'),
    (1, NULL, '2023-07-29 19:00', '2023-07-29 20:00', NULL, 4, 2, NULL, '/img/jazz/performances/gumboKings.png'),
    (13, NULL, '2023-07-29 20:00', '2023-07-29 21:00', NULL, 4, 2, NULL, '/img/jazz/performances/gareDuNord.png');



INSERT INTO Performance (ArtistID, Price, StartDateTime, EndDateTime, AvailableTickets, DayID, VenueID, Hall)
VALUES
    (2, 15.00, '2023-07-26 18:00', '2023-07-26 19:00', 300, 1, 1, 'Main Hall'),
    (3, 15.00, '2023-07-26 19:30', '2023-07-26 20:30', 300, 1, 1, 'Main Hall'),
    (4, 15.00, '2023-07-26 21:00', '2023-07-26 22:00', 300, 1, 1, 'Main Hall'),

    (5, 10.00, '2023-07-26 18:00', '2023-07-26 19:00', 200, 1, 1, 'Second Hall'),
    (6, 10.00, '2023-07-26 19:30', '2023-07-26 20:30', 200, 1, 1, 'Second Hall'),
    (7, 10.00, '2023-07-26 21:00', '2023-07-26 22:00', 200, 1, 1, 'Second Hall'),

    (8, 15.00, '2023-07-27 18:00', '2023-07-27 19:00', 300, 2, 1, 'Main Hall'),
    (9, 15.00, '2023-07-27 19:30', '2023-07-27 20:30', 300, 2, 1, 'Main Hall'),
    (10, 15.00, '2023-07-27 21:00', '2023-07-27 22:00', 300, 2, 1, 'Main Hall'),

    (11, 10.00, '2023-07-27 18:00', '2023-07-27 19:00', 200, 2, 1, 'Second Hall'),
    (12, 10.00, '2023-07-27 19:30', '2023-07-27 20:30', 200, 2, 1, 'Second Hall'),
    (13, 10.00, '2023-07-27 21:00', '2023-07-27 22:00', 200, 2, 1, 'Second Hall'),

    (14, 15.00, '2023-07-28 18:00', '2023-07-28 19:00', 300, 3, 1, 'Main Hall'),
    (15, 15.00, '2023-07-28 19:30', '2023-07-28 20:30', 300, 3, 1, 'Main Hall'),
    (16, 15.00, '2023-07-28 21:00', '2023-07-28 22:00', 300, 3, 1, 'Main Hall'),

    (17, 10.00, '2023-07-28 18:00', '2023-07-28 19:00', 200, 3, 1, 'Second Hall'),
    (18, 10.00, '2023-07-28 19:30', '2023-07-28 20:30', 200, 3, 1, 'Second Hall'),
    (19, 10.00, '2023-07-28 21:00', '2023-07-28 22:00', 200, 3, 1, 'Second Hall'),

    (12, NULL, '2023-07-29 15:00', '2023-07-29 16:00', NULL, 4, 2, NULL),
    (5, NULL, '2023-07-29 16:00', '2023-07-29 17:00', NULL, 4, 2, NULL),
    (3, NULL, '2023-07-29 17:00', '2023-07-29 18:00', NULL, 4, 2, NULL),

    (18, NULL, '2023-07-29 18:00', '2023-07-29 19:00', NULL, 4, 2, NULL),
    (2, NULL, '2023-07-29 19:00', '2023-07-29 20:00', NULL, 4, 2, NULL),
    (14, NULL, '2023-07-29 20:00', '2023-07-29 21:00', NULL, 4, 2, NULL);


CREATE TABLE JazzPass (
    JazzPassID INT AUTO_INCREMENT PRIMARY KEY,
    Price DECIMAL(10, 2),
    StartDateTime DATETIME,
    EndDateTime DATETIME,
    Note VARCHAR(100)
)

ALTER TABLE JazzPass
    ADD COLUMN TotalTickets INT,
    ADD COLUMN AvailableTickets INT;


    INSERT INTO JazzPass (Price, StartDateTime, EndDateTime, Note)
VALUES (80.00, '2023-07-26', '2023-07-28', 'All-Access pass for Thu,Fri, Sat: €80,00'),
        (35.00,'2023-07-26', '2023-07-26', 'All-Access pass for this day €35,00'),
    (35.00,'2023-07-27', '2023-07-27', 'All-Access pass for this day €35,00'),
    (35.00,'2023-07-28', '2023-07-28', 'All-Access pass for this day €35,00');

CREATE TABLE Artist (
                        ArtistID INT AUTO_INCREMENT PRIMARY KEY,
                        Name VARCHAR(100),
                        Bio TEXT,
                        HeaderImg VARCHAR(100),
                        ArtistImg1 VARCHAR(100),
                        ArtistImg2 VARCHAR(100),
                        PerformanceImg VARCHAR(100)
);

INSERT INTO Artist (Name) VALUES ('Gumbo Kings'),
                                 ('Evolve'),
                                 ('Ntjam Rosie'),
                                 ('Wicked Jazz Sounds'),
                                 ('Tom Thomsom Assemble'),
                                 ('Jonna Frazer'),
                                 ('Fox & The Mayors'),
                                 ('Uncle Sue'),
                                 ('Chris Allen'),
                                 ('Myles Sanko'),
                                 ('Ruis Soundsystem'),
                                 ('The Family XL'),
                                 ('Gare du Nord'),
                                 ('Rilan & The Bombadiers'),
                                 ('Soul Six'),
                                 ('Han Bennink'),
                                 ('The Nordanians'),
                                 ('Lilith Merlot');


UPDATE Artist
SET Bio = 'Myles Sanko, born on May 8, 1980, in Accra, is a British soul and jazz singer, songwriter, composer, producer, and cinematographer. Steeped in both Ghanaian and French heritage, his music embodies a rich tapestry of culture, passion, and unyielding resilience. His musical journey is one of evolution, from singing and rapping alongside DJs in nightclubs in his hometown of Cambridge to busking on the city''s streets. These humble beginnings served as a stepping stone to a more expansive career.In 2013 he independently recorded and released his debut album, "Born In Black & White," on his own record label, 213 Music. This bold move caught the attention of Légère Recordings, P-Vine Records, and Dox Records, which recognized his potential and signed a licensing deal with him. Under their banner, he released a series of albums, including the soulful "Forever Dreaming" in 2014, the introspective "Just Being Me" in 2016, the heartfelt "Memories Of Love" in 2021, and the captivating "Live at Philharmonie Luxembourg" in 2023.',
    HeaderImg = '/img/jazz/artists/mylesSankoHeader.png',
    ArtistImg1 = '/img/jazz/artists/mylesSanko1.png',
    ArtistImg2 = '/img/jazz/artists/mylesSanko2.png'
WHERE ArtistID = 11;

UPDATE Artist
SET Bio = 'Known for her timeless voice, Dutch singer and songwriter Lilith Merlot has been enchanted by harmony and melody from a young age. Her mother was a classical violinist and, as a young girl, Lilith often joined her mother on tour through Europe. During her Jazz vocals studies at the Rotterdam Conservatory, Lilith performed in front of American singer Renée Neufville, who remarked: “Your voice is just like a Merlot; it’s so warm, deep, and round”. This inspired Lilith to use Merlot as her stage name. Since releasing her debut EP in 2017, Lilith has been experimenting with various genres, from Jazz to Pop and Soul, influenced by Lizz Wright, Jeff Buckley, and Norah Jones, to name a few, creating music reminiscent of Nina Simone, Melody Gardot, and Madeleine Peyroux. With nearly 5 million streams across platforms, her music has aired across a number of stations under the established Netherlands public broadcaster NPO, earning spins on NPO Soul & Jazz, NPO 3FM Radio and Sublime FM.',
    HeaderImg = '/img/jazz/artists/lilithMerlotHeader.png',
    ArtistImg1 = '/img/jazz/artists/lilithMerlot1.png',
    ArtistImg2 = '/img/jazz/artists/lilithMerlot2.png'
WHERE ArtistID = 19;

UPDATE Artist
SET PerformanceImg =
        CASE
            WHEN ArtistID = 2 THEN '/img/jazz/performances/gumboKings.png'
            WHEN ArtistID = 3 THEN '/img/jazz/performances/evolve.png'
            WHEN ArtistID = 4 THEN '/img/jazz/performances/ntjamRosie.png'
            WHEN ArtistID = 5 THEN '/img/jazz/performances/wickedJazzSounds.png'
            WHEN ArtistID = 6 THEN '/img/jazz/performances/tomThompsonAssemble.png'
            WHEN ArtistID = 7 THEN '/img/jazz/performances/jonnaFrazer.png'
            WHEN ArtistID = 8 THEN '/img/jazz/performances/foxAndTheMayors.png'
            WHEN ArtistID = 9 THEN '/img/jazz/performances/uncleSue.png'
            WHEN ArtistID = 10 THEN '/img/jazz/performances/chrisAllen.png'
            WHEN ArtistID = 11 THEN '/img/jazz/performances/mylesSanko.png'
            WHEN ArtistID = 12 THEN '/img/jazz/performances/ruisSoundsystem.png'
            WHEN ArtistID = 13 THEN '/img/jazz/performances/theFamilyXL.png'
            WHEN ArtistID = 14 THEN '/img/jazz/performances/gareDuNord.png'
            WHEN ArtistID = 15 THEN '/img/jazz/performances/rilanAndTheBombadiers.png'
            WHEN ArtistID = 16 THEN '/img/jazz/performances/soulSix.png'
            WHEN ArtistID = 17 THEN '/img/jazz/performances/hannBennink.png'
            WHEN ArtistID = 18 THEN '/img/jazz/performances/theNordanians.png'
            WHEN ArtistID = 19 THEN '/img/jazz/performances/lilithMerlot.png'
            END;


UPDATE Artist
SET Bio = 'some bio'
WHERE ArtistID NOT IN (11, 19);


ALTER TABLE Artist
    ADD COLUMN Album1 VARCHAR(100),
    ADD COLUMN Album2 VARCHAR(100),
    ADD COLUMN Album3 VARCHAR(100),
    ADD COLUMN Song1 VARCHAR(100),
    ADD COLUMN Song2 VARCHAR(100),
    ADD COLUMN Song3 VARCHAR(100);


UPDATE Artist
SET Album1 = '7oBC2PuPSvXkLEZdoCxsv5', Album2 = '18g4jSwIbYcbJI5U7PIzMz', Album3 = '0B7DKUR00yRXncWrlQwIR6',
    Song1 = '6XQHlsNu6so4PdglFkJQRJ', Song2 = '2VvDKx7lzdarObpQFn1iAh', Song3 = '1otrWVcbCxemNnn7eiKW1P'
WHERE ArtistID NOT IN (11, 19);

UPDATE Artist
SET Album1 = '2LsarF7MWgoNLK8DsCC1d9',
    Album2 = '3IYw1yRBBNYXGf2XLx1kl4',
    Album3 = '2AWCbsMHCCW6VFd3LFz9D1',
    Song1 = '5Ck86xT1yXsPRi1vRUTECa',
    Song2 = '3d4k38C0dO6BWOkPn62eey',
    Song3 = '7Iku7xW9nlXg6qaMi3xDV2'
WHERE ArtistID = 19;


UPDATE Artist
SET Album1 = '2wob0s3WIRpsvYHSpDqywa',
    Album2 = '1ZQMYhEAylDE7Af6iEtIty',
    Album3 = '3BSt7oYQhijrtcoeWr7BUc',
    Song1 = '1oU7DOcuVs4TqnewtTgR1P',
    Song2 = '6uL0ZXwr17RgsMRmXKYY11',
    Song3 = '66whY3xoQgrvmpQgCvFNsv'
WHERE ArtistID = 11;



CREATE TABLE Album
(
                       AlbumID INT AUTO_INCREMENT PRIMARY KEY,
                       ArtistID INT,
                       SpotifyID VARCHAR(100),
                       FOREIGN KEY (ArtistID) REFERENCES Artist(ArtistID)
);

INSERT INTO Album (ArtistID, SpotifyID)
VALUES (19, '2LsarF7MWgoNLK8DsCC1d9'),
       (19, '3IYw1yRBBNYXGf2XLx1kl4'),
       (19, '2AWCbsMHCCW6VFd3LFz9D1'),
       (11, '2wob0s3WIRpsvYHSpDqywa'),
       (11, '1ZQMYhEAylDE7Af6iEtIty'),
       (11, '3BSt7oYQhijrtcoeWr7BUc');


CREATE TABLE Song (
                      SongID INT AUTO_INCREMENT PRIMARY KEY,
                      ArtistID INT,
                      SpotifyID VARCHAR(100),
                      FOREIGN KEY (ArtistID) REFERENCES Artist(ArtistID)
);

INSERT INTO Song (ArtistID, SpotifyID)
VALUES (19, '5Ck86xT1yXsPRi1vRUTECa'),
       (19, '3d4k38C0dO6BWOkPn62eey'),
       (19, '7Iku7xW9nlXg6qaMi3xDV2'),
       (11, '1oU7DOcuVs4TqnewtTgR1P'),
       (11, '6uL0ZXwr17RgsMRmXKYY11'),
       (11, '66whY3xoQgrvmpQgCvFNsv');



INSERT INTO Album (ArtistID, SpotifyID) VALUES
                                            (2, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (2, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (2, '0B7DKUR00yRXncWrlQwIR6'),
                                            (3, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (3, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (3, '0B7DKUR00yRXncWrlQwIR6'),
                                            (4, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (4, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (4, '0B7DKUR00yRXncWrlQwIR6'),
                                            (5, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (5, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (5, '0B7DKUR00yRXncWrlQwIR6'),
                                            (6, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (6, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (6, '0B7DKUR00yRXncWrlQwIR6'),
                                            (7, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (7, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (7, '0B7DKUR00yRXncWrlQwIR6'),
                                            (8, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (8, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (8, '0B7DKUR00yRXncWrlQwIR6'),
                                            (9, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (9, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (9, '0B7DKUR00yRXncWrlQwIR6'),
                                            (10, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (10, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (10, '0B7DKUR00yRXncWrlQwIR6'),
                                            (12, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (12, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (12, '0B7DKUR00yRXncWrlQwIR6'),
                                            (13, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (13, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (13, '0B7DKUR00yRXncWrlQwIR6'),
                                            (14, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (14, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (14, '0B7DKUR00yRXncWrlQwIR6'),
                                            (15, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (15, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (15, '0B7DKUR00yRXncWrlQwIR6'),
                                            (16, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (16, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (16, '0B7DKUR00yRXncWrlQwIR6'),
                                            (17, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (17, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (17, '0B7DKUR00yRXncWrlQwIR6'),
                                            (18, '7oBC2PuPSvXkLEZdoCxsv5'),
                                            (18, '18g4jSwIbYcbJI5U7PIzMz'),
                                            (18, '0B7DKUR00yRXncWrlQwIR6');

INSERT INTO Song (ArtistID, SpotifyID) VALUES
                                           (2, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (2, '2VvDKx7lzdarObpQFn1iAh'),
                                           (2, '1otrWVcbCxemNnn7eiKW1P'),
                                           (3, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (3, '2VvDKx7lzdarObpQFn1iAh'),
                                           (3, '1otrWVcbCxemNnn7eiKW1P'),
                                           (4, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (4, '2VvDKx7lzdarObpQFn1iAh'),
                                           (4, '1otrWVcbCxemNnn7eiKW1P'),
                                           (5, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (5, '2VvDKx7lzdarObpQFn1iAh'),
                                           (5, '1otrWVcbCxemNnn7eiKW1P'),
                                           (6, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (6, '2VvDKx7lzdarObpQFn1iAh'),
                                           (6, '1otrWVcbCxemNnn7eiKW1P'),
                                           (7, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (7, '2VvDKx7lzdarObpQFn1iAh'),
                                           (7, '1otrWVcbCxemNnn7eiKW1P'),
                                           (8, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (8, '2VvDKx7lzdarObpQFn1iAh'),
                                           (8, '1otrWVcbCxemNnn7eiKW1P'),

                                           (9, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (9, '2VvDKx7lzdarObpQFn1iAh'),
                                           (9, '1otrWVcbCxemNnn7eiKW1P'),
                                           (10, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (10, '2VvDKx7lzdarObpQFn1iAh'),
                                           (10, '1otrWVcbCxemNnn7eiKW1P'),
                                           (12, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (12, '2VvDKx7lzdarObpQFn1iAh'),
                                           (12, '1otrWVcbCxemNnn7eiKW1P'),
                                           (13, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (13, '2VvDKx7lzdarObpQFn1iAh'),
                                           (13, '1otrWVcbCxemNnn7eiKW1P'),
                                           (14, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (14, '2VvDKx7lzdarObpQFn1iAh'),
                                           (14, '1otrWVcbCxemNnn7eiKW1P'),
                                           (15, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (15, '2VvDKx7lzdarObpQFn1iAh'),
                                           (15, '1otrWVcbCxemNnn7eiKW1P'),
                                           (16, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (16, '2VvDKx7lzdarObpQFn1iAh'),
                                           (16, '1otrWVcbCxemNnn7eiKW1P'),
                                           (17, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (17, '2VvDKx7lzdarObpQFn1iAh'),
                                           (17, '1otrWVcbCxemNnn7eiKW1P'),
                                           (18, '6XQHlsNu6so4PdglFkJQRJ'),
                                           (18, '2VvDKx7lzdarObpQFn1iAh'),
                                           (18, '1otrWVcbCxemNnn7eiKW1P');


ALTER TABLE Venue
    MODIFY COLUMN Name VARCHAR(100) NOT NULL,
    MODIFY COLUMN Address VARCHAR(100) NOT NULL;

ALTER TABLE JazzDay
    MODIFY COLUMN ImgPath VARCHAR(100) NOT NULL,
    MODIFY column Date DATE not null,
    modify column VenueID INT not null;

ALTER TABLE Performance
    MODIFY COLUMN ArtistID INT NOT NULL,
    MODIFY COLUMN Price DECIMAL(10, 2) NOT NULL,
    MODIFY COLUMN StartDateTime DATETIME NOT NULL,
    MODIFY COLUMN EndDateTime DATETIME NOT NULL,
    MODIFY COLUMN TotalTickets INT NOT NULL,
    MODIFY COLUMN AvailableTickets INT NOT NULL,
    MODIFY COLUMN DayID INT NOT NULL;

ALTER TABLE JazzPass
    MODIFY COLUMN Price DECIMAL(10, 2) NOT NULL,
    MODIFY COLUMN StartDateTime DATETIME NOT NULL,
    MODIFY COLUMN EndDateTime DATETIME NOT NULL,
    MODIFY COLUMN TotalTickets INT NOT NULL,
    MODIFY COLUMN AvailableTickets INT NOT NULL;


ALTER TABLE Artist
    MODIFY COLUMN Name VARCHAR(100) NOT NULL,
    MODIFY COLUMN Bio TEXT NOT NULL,
    MODIFY COLUMN HeaderImg VARCHAR(100) NOT NULL,
    MODIFY COLUMN ArtistImg1 VARCHAR(100) NOT NULL,
    MODIFY COLUMN ArtistImg2 VARCHAR(100) NOT NULL,
    MODIFY COLUMN PerformanceImg VARCHAR(100) NOT NULL,
    MODIFY COLUMN Album1 VARCHAR(100) NOT NULL,
    MODIFY COLUMN Album2 VARCHAR(100) NOT NULL,
    MODIFY COLUMN Album3 VARCHAR(100) NOT NULL,
    MODIFY COLUMN Song1 VARCHAR(100) NOT NULL,
    MODIFY COLUMN Song2 VARCHAR(100) NOT NULL,
    MODIFY COLUMN Song3 VARCHAR(100) NOT NULL;



