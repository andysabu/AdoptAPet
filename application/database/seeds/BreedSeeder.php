<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('breed')->insert(
            array(
                [
                    'name' => 'Unknown',
                    'description' => 'When the raze cannot be known.'
                ],
                [
                    'name' => 'Affenpinscher',
                    'description' => 'is a small breed (type) of dog in the toy group. These dogs originally came from Germany and are known to have existed since the 1600s. Their name comes from the German word "Affe," which means "monkey," because their faces remind people of monkeys. Originally, the dog was bred to be a "ratter," a type of dog that kills rats and mice in homes, farms, and stables. Now that mice are not so commonly found in the home, Affenpinschers are usually just kept as pets.'
                ],
                [
                    'name' => 'Afghan Hound',
                    'description' => 'The Afghan Hound is a dog from Afghanistan. Other names for them are Kuchi Hound, Tāzī, Balkh Hound, Baluchi Hound, Barutzy Hound, Shalgar Hound, Kabul Hound, Galanday Hound, or sometimes, incorrectly, African Hound.'
                ],
                [
                    'name' => 'Africanis',
                    'description' => 'The Africanis is a group of rare South African dogs. They are not recognized as a breed. The Swahili name for the breed is umbwa wa ki-shenzi. This means common or mixed-breed or "traditional dog".'
                ],
                [
                    'name' => 'Aidi',
                    'description' => 'The Aidi or Chien de l\'Atlas is a Moroccan dog breed used to protect flocks of sheep and goats. It also can hunt and smell very well.. In its native Morocco it is often paired in hunting with the Sloughi, which chases down prey that the Aidi has found by sniffing it out.'
                ],
                [
                    'name' => 'Airedale Terrier',
                    'description' => 'The Aidi or Chien de l\'Atlas is a Moroccan dog breed used to protect flocks of sheep and goats. It also can hunt and smell very well.. In its native Morocco it is often paired in hunting with the Sloughi, which chases down prey that the Aidi has found by sniffing it out.'
                ],
                [
                    'name' => 'Akbash Dog',
                    'description' => 'The Akbash Dog is a large breed (type) of dog which comes from Turkey. It has a white coat of fur. It was bred to protect sheep in the field from thieves and predators. While this dog has been used for this job in Turkey for many hundreds of years, it is not often found outside of Turkey. The Akbash Dog is closely related to other large, white dogs used to protect sheep, such as the Komondor and the Aidi.'
                ],
                [
                    'name' => 'Akita',
                    'description' => 'The Akita is a breed of dog from Japan. It is usually 60–70 cm high and weighs 35–50 kg. Female Akitas are 5 to 10 kg lighter. Their coat can be many colors. There are two coat types in the Akita, the standard coat length and the long coat.'
                ],
                [
                    'name' => 'Alano Español',
                    'description' => ''
                ],
                [
                    'name' => 'Alapaha Blue Blood Bulldog',
                    'description' => ''
                ],
                [
                    'name' => 'Alaskan Klee Kai',
                    'description' => 'The Alaskan Klee Kai is a northern breed of dog of the spitz type. The term "Klee Kai" was derived from Alaskan Athabaskan (Eskimo) words meaning "small dog". The breed was developed to create a pet sized version of the Alaskan Husky, but it more closely resembles the Siberian Husky. This result makes it an energetic, intelligent, apartment-sized dog with an appearance that reflects its northern heritage.'
                ],
                [
                    'name' => 'Alaskan husky',
                    'description' => ''
                ],
                [
                    'name' => 'Alaskan Malamute',
                    'description' => 'The Alaskan Malamute is a breed of domestic dog. It was originally bred for use as an Alaskan sled dog. This dog is usually large in size. It is sometimes mistaken for a Siberian Husky. The Alaskan Malamute is strong and powerful and was used to carry heavy loads for long distances.'
                ],
                [
                    'name' => 'Alopekis',
                    'description' => ''
                ],
                [
                    'name' => 'Alpine Dachsbracke',
                    'description' => ''
                ],
                [
                    'name' => 'Alsatian',
                    'description' => ''
                ],
                [
                    'name' => 'American Akita',
                    'description' => ''
                ],
                [
                    'name' => 'American Bulldog',
                    'description' => ''
                ],
                [
                    'name' => 'American Cocker Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'American English Coonhound',
                    'description' => ''
                ],
                [
                    'name' => 'American Eskimo Dog',
                    'description' => ''
                ],
                [
                    'name' => 'American Foxhound',
                    'description' => ''
                ],
                [
                    'name' => 'American Hairless Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'American Husky',
                    'description' => ''
                ],
                [
                    'name' => 'American Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'American Pit Bull Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'American Staghound',
                    'description' => ''
                ],
                [
                    'name' => 'American Staffordshire Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'American Water Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'An-Az',
                    'description' => ''
                ],
                [
                    'name' => 'Anatolian Shepherd Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Anglo-Francais de Petite Venerie',
                    'description' => ''
                ],
                [
                    'name' => 'Appenzeller Sennenhund',
                    'description' => ''
                ],
                [
                    'name' => 'Arctic Husky',
                    'description' => ''
                ],
                [
                    'name' => 'Argentine Dogo',
                    'description' => ''
                ],
                [
                    'name' => 'Ariege Pointer',
                    'description' => ''
                ],
                [
                    'name' => 'Ariegeois',
                    'description' => ''
                ],
                [
                    'name' => 'Artois Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Australian Bulldog',
                    'description' => ''
                ],
                [
                    'name' => 'Australian Cattle Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Australian Jack Russell Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Australian Kelpie',
                    'description' => ''
                ],
                [
                    'name' => 'Australian Koolie - see Koolie',
                    'description' => ''
                ],
                [
                    'name' => 'Australian Shepherd',
                    'description' => ''
                ],
                [
                    'name' => 'Australian Silky Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Australian Stumpy Tail Cattle Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Australian Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Austrian Brandlbracke',
                    'description' => ''
                ],
                [
                    'name' => 'Azawakh',
                    'description' => ''
                ],
                [
                    'name' => 'Boxer',
                    'description' => ''
                ],
                [
                    'name' => 'Balkan Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Bandog',
                    'description' => ''
                ],
                [
                    'name' => 'Barbet',
                    'description' => ''
                ],
                [
                    'name' => 'Basenji',
                    'description' => ''
                ],
                [
                    'name' => 'Basset Artésien Normand',
                    'description' => ''
                ],
                [
                    'name' => 'Basset Bleu de Gascogne',
                    'description' => ''
                ],
                [
                    'name' => 'Basset Fauve de Bretagne',
                    'description' => ''
                ],
                [
                    'name' => 'Basset Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Bavarian Mountain Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Beagle',
                    'description' => ''
                ],
                [
                    'name' => 'Beagle-Harrier',
                    'description' => ''
                ],
                [
                    'name' => 'Bearded Collie',
                    'description' => ''
                ],
                [
                    'name' => 'Bearded Tibetan Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Beauceron',
                    'description' => ''
                ],
                [
                    'name' => 'Bedlington Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Belgian Griffon',
                    'description' => ''
                ],
                [
                    'name' => 'Belgian Shepherd Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Berger Blanc Suisse',
                    'description' => ''
                ],
                [
                    'name' => 'Berger Picard',
                    'description' => ''
                ],
                [
                    'name' => 'Bergamasco',
                    'description' => ''
                ],
                [
                    'name' => 'Bernese Mountain Dog (Berner Sennenhund)',
                    'description' => ''
                ],
                [
                    'name' => 'Bichon Frisé',
                    'description' => ''
                ],
                [
                    'name' => 'Biewer',
                    'description' => ''
                ],
                [
                    'name' => 'Billy',
                    'description' => ''
                ],
                [
                    'name' => 'Black and Tan Coonhound',
                    'description' => ''
                ],
                [
                    'name' => 'Black Mouth Cur',
                    'description' => ''
                ],
                [
                    'name' => 'Black Russian Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Bloodhound',
                    'description' => ''
                ],
                [
                    'name' => 'Blue Heeler',
                    'description' => ''
                ],
                [
                    'name' => 'Blue Paul Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Blue Picardy Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Bluetick Coonhound',
                    'description' => ''
                ],
                [
                    'name' => 'Bolognese',
                    'description' => ''
                ],
                [
                    'name' => 'Boerboel',
                    'description' => ''
                ],
                [
                    'name' => 'Border Collie',
                    'description' => ''
                ],
                [
                    'name' => 'Border Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Borzoi',
                    'description' => ''
                ],
                [
                    'name' => 'Bosanski Ostrodlaki Gonic Barak',
                    'description' => ''
                ],
                [
                    'name' => 'Bosnian Tornjak',
                    'description' => ''
                ],
                [
                    'name' => 'Boston Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Bouvier Bernois - see Bernese Mountain Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Bouvier des Ardennes',
                    'description' => ''
                ],
                [
                    'name' => 'Bouvier des Flandres',
                    'description' => ''
                ],
                [
                    'name' => 'Boykin Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Bracco Italiano',
                    'description' => ''
                ],
                [
                    'name' => 'Braque d\'Auvergne',
                    'description' => ''
                ],
                [
                    'name' => 'Braque du Bourbonnais',
                    'description' => ''
                ],
                [
                    'name' => 'Braque Francais (Gascogne type)',
                    'description' => ''
                ],
                [
                    'name' => 'Braque Francais (Pyrenean type)',
                    'description' => ''
                ],
                [
                    'name' => 'Braque Saint-Germain',
                    'description' => ''
                ],
                [
                    'name' => 'Brazilian Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Brazilian Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Briard',
                    'description' => ''
                ],
                [
                    'name' => 'Briquet Griffon Vendeen',
                    'description' => ''
                ],
                [
                    'name' => 'Brittany',
                    'description' => ''
                ],
                [
                    'name' => 'Broholmer',
                    'description' => ''
                ],
                [
                    'name' => 'Brussels Griffon - see Griffon Bruxellois',
                    'description' => ''
                ],
                [
                    'name' => 'Romanian Shepherd Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Bull Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Bull Terrier (Miniature)',
                    'description' => ''
                ],
                [
                    'name' => 'Bulldog',
                    'description' => ''
                ],
                [
                    'name' => 'Bullmastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Bully Kutta',
                    'description' => ''
                ],
                [
                    'name' => 'Ca de Bou',
                    'description' => ''
                ],
                [
                    'name' => 'Cairn Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Canaan Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Canadian Eskimo Dog (Canadian Inuit Dog)',
                    'description' => ''
                ],
                [
                    'name' => 'Cane Corso',
                    'description' => ''
                ],
                [
                    'name' => 'Cão da Serra de Aires',
                    'description' => ''
                ],
                [
                    'name' => 'Portuguese Water Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Cão de Castro Laboreiro',
                    'description' => ''
                ],
                [
                    'name' => 'Cão de Fila de São Miguel',
                    'description' => ''
                ],
                [
                    'name' => 'Cão de Fila da Terceira',
                    'description' => ''
                ],
                [
                    'name' => 'Cão de Gado Transmontano',
                    'description' => ''
                ],
                [
                    'name' => 'Caravan Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Carpatin',
                    'description' => ''
                ],
                [
                    'name' => 'Catahoula Leopard Dog (Catahoula Cur or Catahoula Hog Dog)',
                    'description' => ''
                ],
                [
                    'name' => 'Catahoula Bulldog',
                    'description' => ''
                ],
                [
                    'name' => 'Catalan Sheepdog',
                    'description' => ''
                ],
                [
                    'name' => 'Caucasian Ovcharka',
                    'description' => ''
                ],
                [
                    'name' => 'Cavalier King Charles Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Central Asia Shepherd Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Cesky Fousek',
                    'description' => ''
                ],
                [
                    'name' => 'Cesky Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Chesapeake Bay Retriever',
                    'description' => ''
                ],
                [
                    'name' => 'Chihuahua',
                    'description' => ''
                ],
                [
                    'name' => 'Chinese Crested Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Chinook',
                    'description' => ''
                ],
                [
                    'name' => 'Chippiparai',
                    'description' => ''
                ],
                [
                    'name' => 'Chow Chow',
                    'description' => ''
                ],
                [
                    'name' => 'Cirneco dell\'Etna',
                    'description' => ''
                ],
                [
                    'name' => 'Clumber Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Cockapoo',
                    'description' => ''
                ],
                [
                    'name' => 'Cocker Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Collie',
                    'description' => ''
                ],
                [
                    'name' => 'Coolie',
                    'description' => ''
                ],
                [
                    'name' => 'Cordoba Fighting Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Corgi',
                    'description' => ''
                ],
                [
                    'name' => 'Coton de Tulear',
                    'description' => ''
                ],
                [
                    'name' => 'Croatian Sheepdog',
                    'description' => ''
                ],
                [
                    'name' => 'Cur',
                    'description' => ''
                ],
                [
                    'name' => 'Curly Coated Retriever',
                    'description' => ''
                ],
                [
                    'name' => 'Czechoslovakian Wolfdog',
                    'description' => ''
                ],
                [
                    'name' => 'Dachshund',
                    'description' => ''
                ],
                [
                    'name' => 'Dakota Sport Retriever',
                    'description' => ''
                ],
                [
                    'name' => 'Dalmatian',
                    'description' => ''
                ],
                [
                    'name' => 'Dandie Dinmont Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Danish Broholmer',
                    'description' => ''
                ],
                [
                    'name' => 'Danish/Swedish Farm Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Deerhound',
                    'description' => ''
                ],
                [
                    'name' => 'Deutsch Drahthaar',
                    'description' => ''
                ],
                [
                    'name' => 'Deutsche Bracke',
                    'description' => ''
                ],
                [
                    'name' => 'Deutscher Wachtelhund',
                    'description' => ''
                ],
                [
                    'name' => 'Dhoki apso',
                    'description' => ''
                ],
                [
                    'name' => 'Do-Khyi',
                    'description' => ''
                ],
                [
                    'name' => 'Dobermann (Doberman Pinscher)',
                    'description' => ''
                ],
                [
                    'name' => 'Dogo Cubano',
                    'description' => ''
                ],
                [
                    'name' => 'Dogue de Bordeaux',
                    'description' => ''
                ],
                [
                    'name' => 'Dogue de Majorque',
                    'description' => ''
                ],
                [
                    'name' => 'Drentse Patrijshond (Dutch Partridge Dog)',
                    'description' => ''
                ],
                [
                    'name' => 'Drever',
                    'description' => ''
                ],
                [
                    'name' => 'Dunker',
                    'description' => ''
                ],
                [
                    'name' => 'bDutch Shepherd Dog',
                    'description' => ''
                ],
                [
                    'name' => 'bDutch Smoushond',
                    'description' => ''
                ],
                [
                    'name' => 'East Siberian Laika',
                    'description' => ''
                ],
                [
                    'name' => 'English Cocker Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'English Coonhound',
                    'description' => ''
                ],
                [
                    'name' => 'English Foxhound',
                    'description' => ''
                ],
                [
                    'name' => 'English Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'English Pointer',
                    'description' => ''
                ],
                [
                    'name' => 'English Setter',
                    'description' => ''
                ],
                [
                    'name' => 'English Shepherd',
                    'description' => ''
                ],
                [
                    'name' => 'English Springer Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'English Toy Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'English Toy Terrier (Black & Tan)',
                    'description' => ''
                ],
                [
                    'name' => 'Entlebucher Mountain Dog/Sennenhund/Cattle Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Epagneul Picard',
                    'description' => ''
                ],
                [
                    'name' => 'Epagneul Pont-Audemer',
                    'description' => ''
                ],
                [
                    'name' => 'Eskimo Dog (Esquimaux)',
                    'description' => ''
                ],
                [
                    'name' => 'Estonian Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Estrela Mountain Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Eurasier',
                    'description' => ''
                ],
                [
                    'name' => 'Eurohound',
                    'description' => ''
                ],
                [
                    'name' => 'Feist',
                    'description' => ''
                ],
                [
                    'name' => 'Field Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Fila Brasileiro',
                    'description' => ''
                ],
                [
                    'name' => 'Finnish Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Finnish Lapphund',
                    'description' => ''
                ],
                [
                    'name' => 'Finnish Spitz',
                    'description' => ''
                ],
                [
                    'name' => 'Flat-Coated Retriever',
                    'description' => ''
                ],
                [
                    'name' => 'Foxhound',
                    'description' => ''
                ],
                [
                    'name' => 'Fox Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Francais Blanc et Noir',
                    'description' => ''
                ],
                [
                    'name' => 'Francais Blanc et Orange',
                    'description' => ''
                ],
                [
                    'name' => 'Francais Tricolore',
                    'description' => ''
                ],
                [
                    'name' => 'Franzuskaya Bolonka',
                    'description' => ''
                ],
                [
                    'name' => 'French Bulldog',
                    'description' => ''
                ],
                [
                    'name' => 'French Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'French Wirehaired Pointing Griffon',
                    'description' => ''
                ],
                [
                    'name' => 'Galgo Español',
                    'description' => ''
                ],
                [
                    'name' => 'Gawii',
                    'description' => ''
                ],
                [
                    'name' => 'German Longhaired Pointer',
                    'description' => ''
                ],
                [
                    'name' => 'German Pinscher',
                    'description' => ''
                ],
                [
                    'name' => 'German Rough-haired Pointer',
                    'description' => ''
                ],
                [
                    'name' => 'German Shepherd Dog',
                    'description' => ''
                ],
                [
                    'name' => 'German Shorthaired Pointer',
                    'description' => ''
                ],
                [
                    'name' => 'German Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'German Spitz',
                    'description' => ''
                ],
                [
                    'name' => 'German Wirehaired Pointer',
                    'description' => ''
                ],
                [
                    'name' => 'Giant Schnauzer',
                    'description' => ''
                ],
                [
                    'name' => 'Glen of Imaal Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Goldendoodle',
                    'description' => ''
                ],
                [
                    'name' => 'Golden Retriever',
                    'description' => ''
                ],
                [
                    'name' => 'Gonczy Polski',
                    'description' => ''
                ],
                [
                    'name' => 'Gordon Setter',
                    'description' => ''
                ],
                [
                    'name' => 'Gos d\'atura',
                    'description' => ''
                ],
                [
                    'name' => 'Grand Anglo-Francais Blanc et Noir',
                    'description' => ''
                ],
                [
                    'name' => 'Grand Anglo-Francais Blanc et Orange',
                    'description' => ''
                ],
                [
                    'name' => 'Grand Anglo-Francais Tricolore',
                    'description' => ''
                ],
                [
                    'name' => 'Grand Basset Griffon Vendeen',
                    'description' => ''
                ],
                [
                    'name' => 'Grand Bleu de Gascogne',
                    'description' => ''
                ],
                [
                    'name' => 'Grand Gascon Saintongeois',
                    'description' => ''
                ],
                [
                    'name' => 'Grand Griffon Vendeen',
                    'description' => ''
                ],
                [
                    'name' => 'Gran Mastin de Borínquen',
                    'description' => ''
                ],
                [
                    'name' => 'Great Dane',
                    'description' => ''
                ],
                [
                    'name' => 'Great Japanese Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Great Pyrenees',
                    'description' => ''
                ],
                [
                    'name' => 'Greater Swiss Mountain Dog (Grosser Schweizer Sennenhund)',
                    'description' => ''
                ],
                [
                    'name' => 'Greek Harehound',
                    'description' => ''
                ],
                [
                    'name' => 'Greek Shepherd (Greek Sheepdog)',
                    'description' => ''
                ],
                [
                    'name' => 'Greenland Dog (Greenland Husky)',
                    'description' => ''
                ],
                [
                    'name' => 'Greyhound',
                    'description' => ''
                ],
                [
                    'name' => 'Griffon Bleu de Gascogne',
                    'description' => ''
                ],
                [
                    'name' => 'Griffon Bruxellois',
                    'description' => ''
                ],
                [
                    'name' => 'Griffon Fauve de Bretagne',
                    'description' => ''
                ],
                [
                    'name' => 'Griffon Nivernais',
                    'description' => ''
                ],
                [
                    'name' => 'Groenendael',
                    'description' => ''
                ],
                [
                    'name' => 'Gull Dong',
                    'description' => ''
                ],
                [
                    'name' => 'Gull Terr',
                    'description' => ''
                ],
                [
                    'name' => 'Hairless Khala',
                    'description' => ''
                ],
                [
                    'name' => 'Haldenstovare',
                    'description' => ''
                ],
                [
                    'name' => 'Hamiltonstövare',
                    'description' => ''
                ],
                [
                    'name' => 'Hanover Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Harrier',
                    'description' => ''
                ],
                [
                    'name' => 'Havanese',
                    'description' => ''
                ],
                [
                    'name' => 'Himalayan Sheepdog',
                    'description' => ''
                ],
                [
                    'name' => 'Hokkaido',
                    'description' => ''
                ],
                [
                    'name' => 'Hollandse Herder (Dutch Shepherd dog)',
                    'description' => ''
                ],
                [
                    'name' => 'Hovawart',
                    'description' => ''
                ],
                [
                    'name' => 'Hungarian Greyhound - see Magyar Agar',
                    'description' => ''
                ],
                [
                    'name' => 'Hungarian Vizsla',
                    'description' => ''
                ],
                [
                    'name' => 'Hungarian Wirehaired Vizsla - see Hungarian Vizsla',
                    'description' => ''
                ],
                [
                    'name' => 'Huntaway',
                    'description' => ''
                ],
                [
                    'name' => 'Hygenhund',
                    'description' => ''
                ],
                [
                    'name' => 'Ibizan Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Icelandic Sheepdog',
                    'description' => ''
                ],
                [
                    'name' => 'Indian Bullterrier',
                    'description' => ''
                ],
                [
                    'name' => 'Irish Bull Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Irish Red and White Setter',
                    'description' => ''
                ],
                [
                    'name' => 'Irish Setter',
                    'description' => ''
                ],
                [
                    'name' => 'Irish Staffordshire Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Irish Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Irish Water Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Irish Wolfhound',
                    'description' => ''
                ],
                [
                    'name' => 'Istarski Kratkodlaki Gonic',
                    'description' => ''
                ],
                [
                    'name' => 'Istarski Ostrodlaki Gonic (Istrian Coarse-Haired Hound)',
                    'description' => ''
                ],
                [
                    'name' => 'Istrian Sheepdog',
                    'description' => ''
                ],
                [
                    'name' => 'Italian Greyhound',
                    'description' => ''
                ],
                [
                    'name' => 'Italian Spinone',
                    'description' => ''
                ],
                [
                    'name' => 'Jack Russell Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Jagdterrier',
                    'description' => ''
                ],
                [
                    'name' => 'Jämthund',
                    'description' => ''
                ],
                [
                    'name' => 'Japanese Chin',
                    'description' => ''
                ],
                [
                    'name' => 'Japanese Spitz',
                    'description' => ''
                ],
                [
                    'name' => 'Japanese Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Jindo - see Korea Jindo Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Jonangi',
                    'description' => ''
                ],
                [
                    'name' => 'Kai Ken',
                    'description' => ''
                ],
                [
                    'name' => 'Kangal Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Kanni',
                    'description' => ''
                ],
                [
                    'name' => 'Karelian Bear Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Kars Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Keeshond',
                    'description' => ''
                ],
                [
                    'name' => 'Kelpie',
                    'description' => ''
                ],
                [
                    'name' => 'Kelb-tal Fenek',
                    'description' => ''
                ],
                [
                    'name' => 'Kerry Blue Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'King Charles Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Kishu',
                    'description' => ''
                ],
                [
                    'name' => 'Kombai',
                    'description' => ''
                ],
                [
                    'name' => 'Komondor',
                    'description' => ''
                ],
                [
                    'name' => 'Kooikerhondje',
                    'description' => ''
                ],
                [
                    'name' => 'Koolie',
                    'description' => ''
                ],
                [
                    'name' => 'Korea Jindo Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Korean Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Korthals Griffon',
                    'description' => ''
                ],
                [
                    'name' => 'Krasky Ovcar',
                    'description' => ''
                ],
                [
                    'name' => 'Kromfohrlander',
                    'description' => ''
                ],
                [
                    'name' => 'Kuvasz',
                    'description' => ''
                ],
                [
                    'name' => 'Kyi Leo',
                    'description' => ''
                ],
                [
                    'name' => 'Labradoodle',
                    'description' => ''
                ],
                [
                    'name' => 'Labrador Retriever',
                    'description' => ''
                ],
                [
                    'name' => 'Laekenois',
                    'description' => ''
                ],
                [
                    'name' => 'Lagotto Romagnolo',
                    'description' => ''
                ],
                [
                    'name' => 'Lakeland Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Lancashire Heeler',
                    'description' => ''
                ],
                [
                    'name' => 'Landseer (Continental-European type)',
                    'description' => ''
                ],
                [
                    'name' => 'Lapinporokoira',
                    'description' => ''
                ],
                [
                    'name' => 'Large Munsterlander',
                    'description' => ''
                ],
                [
                    'name' => 'Leonberger',
                    'description' => ''
                ],
                [
                    'name' => 'Lhasa Apso',
                    'description' => ''
                ],
                [
                    'name' => 'Llewellyn Setter',
                    'description' => ''
                ],
                [
                    'name' => 'Löwchen',
                    'description' => ''
                ],
                [
                    'name' => 'Mackenzie River husky',
                    'description' => ''
                ],
                [
                    'name' => 'Magyar Agar',
                    'description' => ''
                ],
                [
                    'name' => 'Malinois',
                    'description' => ''
                ],
                [
                    'name' => 'Maltese',
                    'description' => ''
                ],
                [
                    'name' => 'Manchester Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Maremma Sheepdog',
                    'description' => ''
                ],
                [
                    'name' => 'Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Meliteo Kinidio',
                    'description' => ''
                ],
                [
                    'name' => 'Mexican Hairless Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Middle Asian Owtcharka',
                    'description' => ''
                ],
                [
                    'name' => 'Miniature Australian Shepherd',
                    'description' => ''
                ],
                [
                    'name' => 'Miniature Bull Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Miniature Fox Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Miniature Pinscher',
                    'description' => ''
                ],
                [
                    'name' => 'Miniature Schnauzer',
                    'description' => ''
                ],
                [
                    'name' => 'Mioritic',
                    'description' => ''
                ],
                [
                    'name' => 'Mixed-breed dog',
                    'description' => ''
                ],
                [
                    'name' => 'Moscovskaya Storozhevaya Sobaka (Moscow Watchdog)',
                    'description' => ''
                ],
                [
                    'name' => 'Mountain Burmese',
                    'description' => ''
                ],
                [
                    'name' => 'Mountain Cur',
                    'description' => ''
                ],
                [
                    'name' => 'Mudi',
                    'description' => ''
                ],
                [
                    'name' => 'Mudhol Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Munsterlander',
                    'description' => ''
                ],
                [
                    'name' => 'Neapolitan Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Nebolish Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Newfoundland',
                    'description' => ''
                ],
                [
                    'name' => 'Norfolk Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Norrbottenspets',
                    'description' => ''
                ],
                [
                    'name' => 'Northern Inuit',
                    'description' => ''
                ],
                [
                    'name' => 'Norwegian Buhund',
                    'description' => ''
                ],
                [
                    'name' => 'Norwegian Elkhound',
                    'description' => ''
                ],
                [
                    'name' => 'Norwegian Lundehund',
                    'description' => ''
                ],
                [
                    'name' => 'Norwich Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Nova Scotia Duck-Tolling Retriever',
                    'description' => ''
                ],
                [
                    'name' => 'Old Danish Pointer',
                    'description' => ''
                ],
                [
                    'name' => 'Old English Sheepdog',
                    'description' => ''
                ],
                [
                    'name' => 'Old English Bulldog',
                    'description' => ''
                ],
                [
                    'name' => 'Olde Englishe Bulldogge',
                    'description' => ''
                ],
                [
                    'name' => 'Osterreichischer Kurzhaariger Pinscher',
                    'description' => ''
                ],
                [
                    'name' => 'Otterhound',
                    'description' => ''
                ],
                [
                    'name' => 'Otto - see Alapaha Blue Blood Bulldog',
                    'description' => ''
                ],
                [
                    'name' => 'Owczarek Podhalanski',
                    'description' => ''
                ],
                [
                    'name' => 'Panja, see American Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Papillon',
                    'description' => ''
                ],
                [
                    'name' => 'Parson Russell Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Patterdale Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Pekeapoo',
                    'description' => ''
                ],
                [
                    'name' => 'Pekingese',
                    'description' => ''
                ],
                [
                    'name' => 'Perdiguero de Burgos',
                    'description' => ''
                ],
                [
                    'name' => 'Perro Cimarron',
                    'description' => ''
                ],
                [
                    'name' => 'Perro de Pastor Mallorquin',
                    'description' => ''
                ],
                [
                    'name' => 'Perro de Presa Canario',
                    'description' => ''
                ],
                [
                    'name' => 'Perro de Presa Mallorquin',
                    'description' => ''
                ],
                [
                    'name' => 'Perro de Toro',
                    'description' => ''
                ],
                [
                    'name' => 'Peruvian Hairless Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Peruvian Inca Orchid',
                    'description' => ''
                ],
                [
                    'name' => 'Petit Basset Griffon Vendeen',
                    'description' => ''
                ],
                [
                    'name' => 'Petit Bleu de Gascogne',
                    'description' => ''
                ],
                [
                    'name' => 'Petit Brabancon',
                    'description' => ''
                ],
                [
                    'name' => 'Petit Gascon Saintongeois',
                    'description' => ''
                ],
                [
                    'name' => 'Phalène',
                    'description' => ''
                ],
                [
                    'name' => 'Pharaoh Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Phung San',
                    'description' => ''
                ],
                [
                    'name' => 'Picardy Shepherd',
                    'description' => ''
                ],
                [
                    'name' => 'Picardy Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Pinscher',
                    'description' => ''
                ],
                [
                    'name' => 'Pit Bull',
                    'description' => ''
                ],
                [
                    'name' => 'Plott Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Podenco Canario',
                    'description' => ''
                ],
                [
                    'name' => 'Pointer',
                    'description' => ''
                ],
                [
                    'name' => 'Poitevin',
                    'description' => ''
                ],
                [
                    'name' => 'Polish Scenthound (Gonczy Polski)',
                    'description' => ''
                ],
                [
                    'name' => 'Polish Greyhound',
                    'description' => ''
                ],
                [
                    'name' => 'Polish Sighthound',
                    'description' => ''
                ],
                [
                    'name' => 'Polish Hound (Polish Ogar)',
                    'description' => ''
                ],
                [
                    'name' => 'Polish Lowland Sheepdog (Polski Owczarek Nizinny or PON)',
                    'description' => ''
                ],
                [
                    'name' => 'Polish Tatra Sheepdog',
                    'description' => ''
                ],
                [
                    'name' => 'Pomeranian',
                    'description' => ''
                ],
                [
                    'name' => 'Pont-Audemer Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Poodle',
                    'description' => ''
                ],
                [
                    'name' => 'Porcelaine',
                    'description' => ''
                ],
                [
                    'name' => 'Portuguese Podengo',
                    'description' => ''
                ],
                [
                    'name' => 'Portuguese Pointer',
                    'description' => ''
                ],
                [
                    'name' => 'Portuguese Shepherd Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Posavac Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Prazsky Krysavik',
                    'description' => ''
                ],
                [
                    'name' => 'Pudelpointer',
                    'description' => ''
                ],
                [
                    'name' => 'Pug',
                    'description' => ''
                ],
                [
                    'name' => 'Puggle',
                    'description' => ''
                ],
                [
                    'name' => 'Puli',
                    'description' => ''
                ],
                [
                    'name' => 'Pumi',
                    'description' => ''
                ],
                [
                    'name' => 'Pyrenean Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Pyrenean Mountain Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Pyrenean Shepherd',
                    'description' => ''
                ],
                [
                    'name' => 'Queensland Heeler',
                    'description' => ''
                ],
                [
                    'name' => 'Rafeiro do Alentejo',
                    'description' => ''
                ],
                [
                    'name' => 'Rajapalayam',
                    'description' => ''
                ],
                [
                    'name' => 'Rampur Greyhound',
                    'description' => ''
                ],
                [
                    'name' => 'Ratonero Bodeguero Andaluz',
                    'description' => ''
                ],
                [
                    'name' => 'Rat Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Redbone Coonhound',
                    'description' => ''
                ],
                [
                    'name' => 'Rhodesian Ridgeback',
                    'description' => ''
                ],
                [
                    'name' => 'Rottweiler',
                    'description' => ''
                ],
                [
                    'name' => 'Rough Collie',
                    'description' => ''
                ],
                [
                    'name' => 'Russian Black Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Russian Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Russian Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Russian Toy Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Russian Tsvetnaya Bolonka',
                    'description' => ''
                ],
                [
                    'name' => 'Russko-Evropeiskaia Laika',
                    'description' => ''
                ],
                [
                    'name' => 'Russell Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Saarlooswolfhond',
                    'description' => ''
                ],
                [
                    'name' => 'Sabueso Espanol',
                    'description' => ''
                ],
                [
                    'name' => 'Saluki',
                    'description' => ''
                ],
                [
                    'name' => 'Samoyed',
                    'description' => ''
                ],
                [
                    'name' => 'Sapsali',
                    'description' => ''
                ],
                [
                    'name' => 'Sarplaninac',
                    'description' => ''
                ],
                [
                    'name' => 'Schapendoes',
                    'description' => ''
                ],
                [
                    'name' => 'Schillerstovare',
                    'description' => ''
                ],
                [
                    'name' => 'Schipperke',
                    'description' => ''
                ],
                [
                    'name' => 'Schnauzer',
                    'description' => ''
                ],
                [
                    'name' => 'Schnoodle',
                    'description' => ''
                ],
                [
                    'name' => 'Schweizer Laufhund',
                    'description' => ''
                ],
                [
                    'name' => 'Schweizer Niederlaufhund',
                    'description' => ''
                ],
                [
                    'name' => 'Scottish Deerhound',
                    'description' => ''
                ],
                [
                    'name' => 'Scottish Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Sealyham Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Segugio Italiano',
                    'description' => ''
                ],
                [
                    'name' => 'Seppala Siberian Sleddog',
                    'description' => ''
                ],
                [
                    'name' => 'Serbian Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Serbian Mountain Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Serbian Tricolour Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Shar Pei',
                    'description' => ''
                ],
                [
                    'name' => 'Shetland Sheepdog',
                    'description' => ''
                ],
                [
                    'name' => 'Shiba Inu',
                    'description' => ''
                ],
                [
                    'name' => 'Shih Tzu',
                    'description' => ''
                ],
                [
                    'name' => 'Shikoku',
                    'description' => ''
                ],
                [
                    'name' => 'Shiloh Shepherd Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Siberian Husky',
                    'description' => ''
                ],
                [
                    'name' => 'Silken Windhound',
                    'description' => ''
                ],
                [
                    'name' => 'Silky Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Sindh Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Skye Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Sloughi',
                    'description' => ''
                ],
                [
                    'name' => 'Slovak Cuvac',
                    'description' => ''
                ],
                [
                    'name' => 'Slovakian Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Slovensky Hrubosrsty Stavac (Ohar)',
                    'description' => ''
                ],
                [
                    'name' => 'Smalandsstovare',
                    'description' => ''
                ],
                [
                    'name' => 'Small Greek Domestic Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Small Munsterlander',
                    'description' => ''
                ],
                [
                    'name' => 'Smooth Collie',
                    'description' => ''
                ],
                [
                    'name' => 'Smooth Fox Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Soft-Coated Wheaten Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'South Russian Ovtcharka',
                    'description' => ''
                ],
                [
                    'name' => 'Spanish Alano',
                    'description' => ''
                ],
                [
                    'name' => 'Spanish Galgo',
                    'description' => ''
                ],
                [
                    'name' => 'Spanish Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Spanish Water Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Spinone Italiano',
                    'description' => ''
                ],
                [
                    'name' => 'Spitz',
                    'description' => ''
                ],
                [
                    'name' => 'Springer Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'St. Bernard',
                    'description' => ''
                ],
                [
                    'name' => 'Stabyhoun',
                    'description' => ''
                ],
                [
                    'name' => 'Staffordshire Bull Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Standard Schnauzer',
                    'description' => ''
                ],
                [
                    'name' => 'Stephens Cur',
                    'description' => ''
                ],
                [
                    'name' => 'Styrian Coarse-haired Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Sussex Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Swedish Elkhound',
                    'description' => ''
                ],
                [
                    'name' => 'Swedish Lapphund',
                    'description' => ''
                ],
                [
                    'name' => 'Swedish Vallhund',
                    'description' => ''
                ],
                [
                    'name' => 'Swiss Shorthaired Pinscher',
                    'description' => ''
                ],
                [
                    'name' => 'Tatra Shepherd Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Tenterfield Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Tervuren',
                    'description' => ''
                ],
                [
                    'name' => 'Thai Bangkaew Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Thai Ridgeback',
                    'description' => ''
                ],
                [
                    'name' => 'Teddy Roosevelt Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Tibetan Kyi Apso',
                    'description' => ''
                ],
                [
                    'name' => 'Tibetan Lhasa Apso',
                    'description' => ''
                ],
                [
                    'name' => 'Tibetan Mastiff',
                    'description' => ''
                ],
                [
                    'name' => 'Tibetan Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Tibetan Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Tosa',
                    'description' => ''
                ],
                [
                    'name' => 'Toy Bulldog',
                    'description' => ''
                ],
                [
                    'name' => 'Toy Fox Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Toy Manchester Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Toy Mi-Ki',
                    'description' => ''
                ],
                [
                    'name' => 'Transylvanian Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Treeing Cur',
                    'description' => ''
                ],
                [
                    'name' => 'Treeing Tennessee Brindle',
                    'description' => ''
                ],
                [
                    'name' => 'Treeing Walker Coonhound',
                    'description' => ''
                ],
                [
                    'name' => 'Tsvetnaya Bolonka',
                    'description' => ''
                ],
                [
                    'name' => 'Tyrolean Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Utonagan',
                    'description' => ''
                ],
                [
                    'name' => 'Valley Bulldog',
                    'description' => ''
                ],
                [
                    'name' => 'Vizsla',
                    'description' => ''
                ],
                [
                    'name' => 'Volpino Italiano',
                    'description' => ''
                ],
                [
                    'name' => 'Weimaraner',
                    'description' => ''
                ],
                [
                    'name' => 'Welsh Corgi',
                    'description' => ''
                ],
                [
                    'name' => 'Cardigan Welsh Corgi',
                    'description' => ''
                ],
                [
                    'name' => 'Pembroke Welsh Corgi',
                    'description' => ''
                ],
                [
                    'name' => 'Welsh Springer Spaniel',
                    'description' => ''
                ],
                [
                    'name' => 'Welsh Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'West Highland White Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'West Siberian Laika',
                    'description' => ''
                ],
                [
                    'name' => 'Westphalian Dachsbracke',
                    'description' => ''
                ],
                [
                    'name' => 'Wetterhoun',
                    'description' => ''
                ],
                [
                    'name' => 'Whippet',
                    'description' => ''
                ],
                [
                    'name' => 'White Shepherd Dog',
                    'description' => ''
                ],
                [
                    'name' => 'Wilkinson Bulldog',
                    'description' => ''
                ],
                [
                    'name' => 'Wire Fox Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Wirehaired Pointing Griffon',
                    'description' => ''
                ],
                [
                    'name' => 'Xoloitzcuintle',
                    'description' => ''
                ],
                [
                    'name' => 'Yorkshire Terrier',
                    'description' => ''
                ],
                [
                    'name' => 'Yugoslavian Mountain Hound',
                    'description' => ''
                ],
                [
                    'name' => 'Yugoslavian Tricolour Hound',
                    'description' => ''
                ]
            )
        );
    }
}
