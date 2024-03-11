
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

INSERT INTO Artist (Name, Bio, HeaderImg, ArtistImg1, ArtistImg2)
VALUES ('Lilith Merlot', 'Known for her timeless voice, Dutch singer and songwriter Lilith Merlot has been enchanted by harmony and melody from a young age. Her mother was a classical violinist and, as a young girl, Lilith often joined her mother on tour through Europe. During her Jazz vocals studies at the Rotterdam Conservatory, Lilith performed in front of American singer Renée Neufville, who remarked: “Your voice is just like a Merlot; it’s so warm, deep, and round”. This inspired Lilith to use Merlot as her stage name. Since releasing her debut EP in 2017, Lilith has been experimenting with various genres, from Jazz to Pop and Soul, influenced by Lizz Wright, Jeff Buckley, and Norah Jones, to name a few, creating music reminiscent of Nina Simone, Melody Gardot, and Madeleine Peyroux. With nearly 5 million streams across platforms, her music has aired across a number of stations under the established Netherlands public broadcaster NPO, earning spins on NPO Soul & Jazz, NPO 3FM Radio and Sublime FM.', '/img/artists/lilithMerlotHeader.png', '/img/artists/lilithMerlot1.png', '/img/artists/lilithMerlot2.png');

UPDATE Artist
SET Bio = 'Myles Sanko, born on May 8, 1980, in Accra, is a British soul and jazz singer, songwriter, composer, producer, and cinematographer. Steeped in both Ghanaian and French heritage, his music embodies a rich tapestry of culture, passion, and unyielding resilience. His musical journey is one of evolution, from singing and rapping alongside DJs in nightclubs in his hometown of Cambridge to busking on the city''s streets. These humble beginnings served as a stepping stone to a more expansive career.In 2013 he independently recorded and released his debut album, "Born In Black & White," on his own record label, 213 Music. This bold move caught the attention of Légère Recordings, P-Vine Records, and Dox Records, which recognized his potential and signed a licensing deal with him. Under their banner, he released a series of albums, including the soulful "Forever Dreaming" in 2014, the introspective "Just Being Me" in 2016, the heartfelt "Memories Of Love" in 2021, and the captivating "Live at Philharmonie Luxembourg" in 2023.',
    HeaderImg = '/img/jazz/artists/mylesSankoHeader.png',
    ArtistImg1 = '/img/jazz/artists/mylesSanko1.png',
    ArtistImg2 = '/img/jazz/artists/mylesSanko2.png'
WHERE ArtistID = 11;

UPDATE Artist
SET Bio = 'Known for her timeless voice, Dutch singer and songwriter Lilith Merlot has been enchanted by harmony and melody from a young age. Her mother was a classical violinist and, as a young girl, Lilith often joined her mother on tour through Europe. During her Jazz vocals studies at the Rotterdam Conservatory, Lilith performed in front of American singer Renée Neufville, who remarked: “Your voice is just like a Merlot; it’s so warm, deep, and round”. This inspired Lilith to use Merlot as her stage name. Since releasing her debut EP in 2017, Lilith has been experimenting with various genres, from Jazz to Pop and Soul, influenced by Lizz Wright, Jeff Buckley, and Norah Jones, to name a few, creating music reminiscent of Nina Simone, Melody Gardot, and Madeleine Peyroux. With nearly 5 million streams across platforms, her music has aired across a number of stations under the established Netherlands public broadcaster NPO, earning spins on NPO Soul & Jazz, NPO 3FM Radio and Sublime FM.',
    HeaderImg = '/img/artists/lilithMerlotHeader.png',
    ArtistImg1 = '/img/artists/lilithMerlot1.png',
    ArtistImg2 = '/img/artists/lilithMerlot2.png'
WHERE Name = 'Lilith Merlot';

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


CREATE TABLE Venue (
    VenueID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100),
    Address VARCHAR(100),
    Email VARCHAR(100),
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
    DayNumber INT,
    Date DATE,
    ImgPath VARCHAR(100),
    VenueID INT,
    Note TEXT,
    FOREIGN KEY (VenueID) REFERENCES Venue(VenueID)
);

INSERT INTO JazzDay (DayNumber, Date, ImgPath, VenueID, Note)
VALUES
    (1, '2023-07-26', '/img/jazz/jazzDay1.png', 1, 'All-Access pass for this day €35,00, All-Access pass for Thu,Fri, Sat: €80,00.'),
    (2, '2023-07-27', '/img/jazz/jazzDay2.png', 1, 'All-Access pass for this day €35,00, All-Access pass for Thu,Fri, Sat: €80,00.'),
    (3, '2023-07-28', '/img/jazz/jazzDay3.png', 1, 'All-Access pass for this day €35,00, All-Access pass for Thu,Fri, Sat: €80,00.'),
    (4, '2023-07-29', '/img/jazz/jazzDay4.png', 2, 'Free for all visitors. No reservation needed.');



CREATE TABLE Performance (
    PerformanceID INT AUTO_INCREMENT PRIMARY KEY,
    ArtistID INT,
    Price DECIMAL(10, 2),
    StartDateTime DATETIME,
    EndDateTime DATETIME,
    AvailableTickets INT,
    DayID INT,
    VenueID INT,
    Hall VARCHAR(50),
    FOREIGN KEY (ArtistID) REFERENCES Artist(ArtistID),
    FOREIGN KEY (DayID) REFERENCES JazzDay(DayID),
    FOREIGN KEY (VenueID) REFERENCES Venue(VenueID)
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


CREATE TABLE Album (
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


