### <a name="algorithmsDataStructures"></a>Algorithms and Data Structures
<hr>

#### <a name="algorithms"></a>Algorithms

<br /><br />
Log In<br />
Pseudo-code:<br /><br />

//variable holding username provided<br />
$providedUser;<br />
//variable holding password provided<br />
$providedPassword;<br />
//check if user is in database
<br />if(doesUserExist($providedUser)){
<br />    //if successful then compare with password
<br />    if(logIn($providedUser,$providedPassword)){
<br />        //if successfull then log in and redirect to page for users logged in
<br />        $user=$providedUser;
<br />        request('/account/logIn');
<br />    }
<br />}

<hr>

#### <a name="dataStuctures"></a>Data Structures
Arrays
<br />The application developed makes use of multiple two dimensional or three dimensional arrays to minimize the amount of times the information is consulted to the database.
<br />
<br />Arrays of two dimensions are as follows:
<br />
<br />Array_of_Campuses{
<br />    Array_of_CSUS_Campus[
<br />        Array_of_AIRC_Floors('Floor 1' => trafficInFloorValue1, 'Floor 2' => trafficInFloorValue2),
<br />        Array_of_Library_Floors('Floor 1' => trafficInFloorValue1, 'Floor 2' => trafficInFloorValue2)
<br />    ],
<br />    Array_of_Davis_Campus[
<br />        Array_of_StudentCenter_Floors('Floor 1' => trafficInFloorValue1, 'Floor 2' => trafficInFloorValue2),
<br />        Array_of_Library_Floors('Floor 1' => trafficInFloorValue1, 'Floor 2' => trafficInFloorValue2)
<br />    ]
<br />}
<br />
<br />Algorithms that the team expects to develop will pull the necessary data as needed in order to display it in the appropiate manner on the graphical user interface.
<br />
<br />Hashed Tables
<br />
<br />Hashing tables haven't been designed and are expected to be developed to protect the user's password in the database for increased protection. These passwords will be unrecoverable and new ones have to be created if the user wants to restore their account due to forgotten paswords.
<hr>
