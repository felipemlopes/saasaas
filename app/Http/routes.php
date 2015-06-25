<?php

Route::get('/', function () {
    // $apiKey = getenv('WORDNIK_KEY');
    $apiKey = 'a2a73e7b926c924fad7001ca3111acd55af2ffabf50eb4ae5';

    $url = sprintf(
        "http://api.wordnik.com:80/v4/words.json/randomWord?hasDictionaryDef=false&includePartOfSpeech=noun-plural&minCorpusCount=1&maxCorpusCount=-1&minDictionaryCount=1&maxDictionaryCount=-1&minLength=5&maxLength=-1&api_key=%s",
        $apiKey
    );

    $result = json_decode(file_get_contents($url));

    $word = ucwords($result->word);

    /* Later...

    $url = sprintf(
        "http://api.crunchbase.com/v/2/organizations?user_key=%s&order=updated_at%20desc",
        $apiKey
    );

    $result = json_decode(file_get_contents($url));

    dd($result);

    $word = ucwords($result->word);


    Hacky crap for now....
    */

    $startups = [
        'Dwell',
        'Uber',
        'Bento',
        'Astro',
        'Crystal',
        'Craft Coffee',
        'Leaf.fm',
        'Campaign',
        'Looklist',
        'Shyp',
        'Sprig',
        'Zymergen',
        'Platejoy',
        'Pillpack',
        'Beepi',
        'Ride',
        'Life360',
        'Thumbtack',
        'Postmates',
        'DuckDuckGo',
        'Leap Motion',
        '500px',
        'Artsy',
        'Locu',
        'Etsy',
        'Facebook',
        'Twitter',
        'Vungle',
        'Recurly',
        'Vine',
        'Instagram',
        'Elevate',
        'Firebase',
        'Freshdesk',
        'Slack',
        'Fundly',
        'Mint',
        'Yelp',
        'Spotify',
        'Rdio',
        'SalesForce',
        'Visual.ly',
        'Kahuna',
        'Robinhood',
        'Intercom',
        'Koding',
        'Boomerang',
        'YouTube',
    ];

    $animals = [
        'Aardvark',
        'Albatross',
        'Alligator',
        'Alpaca',
        'Ant',
        'Anteater',
        'Antelope',
        'Ape',
        'Armadillo',
        'Ass',
        'Baboon',
        'Badger',
        'Barracuda',
        'Bat',
        'Bear',
        'Beaver',
        'Bee',
        'Bison',
        'Boar',
        'Buffalo',
        'Butterfly',
        'Camel',
        'Capybara',
        'Caribou',
        'Cassowary',
        'Cat',
        'Caterpillar',
        'Cattle',
        'Chamois',
        'Cheetah',
        'Chicken',
        'Chimpanzee',
        'Chinchilla',
        'Chough',
        'Clam',
        'Cobra',
        'Cockroach',
        'Cod',
        'Cormorant',
        'Coyote',
        'Crab',
        'Crane',
        'Crocodile',
        'Crow',
        'Curlew',
        'Deer',
        'Dinosaur',
        'Dog',
        'Dogfish',
        'Dolphin',
        'Donkey',
        'Dotterel',
        'Dove',
        'Dragonfly',
        'Duck',
        'Dugong',
        'Dunlin',
        'Eagle',
        'Echidna',
        'Eel',
        'Eland',
        'Elephant',
        'Elephant seal',
        'Elk',
        'Emu',
        'Falcon',
        'Ferret',
        'Finch',
        'Fish',
        'Flamingo',
        'Fly',
        'Fox',
        'Frog',
        'Gaur',
        'Gazelle',
        'Gerbil',
        'Giant Panda',
        'Giraffe',
        'Gnat',
        'Gnu',
        'Goat',
        'Goose',
        'Goldfinch',
        'Goldfish',
        'Gorilla',
        'Goshawk',
        'Grasshopper',
        'Grouse',
        'Guanaco',
        'Guinea fowl',
        'Guinea pig',
        'Gull',
        'Hamster',
        'Hare',
        'Hawk',
        'Hedgehog',
        'Heron',
        'Herring',
        'Hippopotamus',
        'Hornet',
        'Horse',
        'Human',
        'Hummingbird',
        'Hyena',
        'Ibex',
        'Ibis',
        'Jackal',
        'Jaguar',
        'Jay',
        'Jellyfish',
        'Kangaroo',
        'Kingfisher',
        'Koala',
        'Komodo dragon',
        'Kookabura',
        'Kouprey',
        'Kudu',
        'Lapwing',
        'Lark',
        'Lemur',
        'Leopard',
        'Lion',
        'Llama',
        'Lobster',
        'Locust',
        'Loris',
        'Louse',
        'Lyrebird',
        'Magpie',
        'Manatee',
        'Mandrill',
        'Mantis',
        'Marten',
        'Meerkat',
        'Mink',
        'Mole',
        'Mongoose',
        'Monkey',
        'Moose',
        'Mouse',
        'Mosquito',
        'Mule',
        'Narwhal',
        'Newt',
        'Nightingale',
        'Octopus',
        'Okapi',
        'Opossum',
        'Oryx',
        'Ostrich',
        'Otter',
        'Owl',
        'Oyster',
        'Panther',
        'Parrot',
        'Panda',
        'Partridge',
        'Peafowl',
        'Pelican',
        'Penguin',
        'Pheasant',
        'Pig',
        'Pigeon',
        'Polar Bear',
        'Pony',
        'Porcupine',
        'Porpoise',
        'Prairie Dog',
        'Quail',
        'Quelea',
        'Quetzal',
        'Rabbit',
        'Raccoon',
        'Rail',
        'Ram',
        'Rat',
        'Raven',
        'Reindeer',
        'Rhinoceros',
        'Rook',
        'Salamander',
        'Salmon',
        'Sandpiper',
        'Sardine',
        'Scorpion',
        'Sea lion',
        'Sea Urchin',
        'Seahorse',
        'Seal',
        'Shark',
        'Sheep',
        'Shrew',
        'Skunk',
        'Snail',
        'Snake',
        'Sparrow',
        'Spider',
        'Spoonbill',
        'Squid',
        'Squirrel',
        'Starling',
        'Stingray',
        'Stinkbug',
        'Stork',
        'Swallow',
        'Swan',
        'Tapir',
        'Tarsier',
        'Termite',
        'Tiger',
        'Toad',
        'Trout',
        'Turkey',
        'Turtle',
        'Viper',
        'Vulture',
        'Wallaby',
        'Walrus',
        'Wasp',
        'Water buffalo',
        'Weasel',
        'Whale',
        'Wildcat',
        'Wolf',
        'Wolverine',
        'Wombat',
        'Woodcock',
        'Woodpecker',
        'Worm',
        'Wren',
        'Yak',
        'Zebra',
    ];

    return view('do-it', [
        'startup' => $startups[array_rand($startups)],
        'word' => ucwords(str_plural($animals[array_rand($animals)]))
    ]);
});
