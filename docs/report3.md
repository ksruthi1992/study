## Report 3
### Cover Page and Individual Contribution

Course title: CSC 131 Section 4 - Computer Software Engineering

Team number: 2

Team name: Team Tux

Project: Study Spot Finder

Project website: www.SpotFinder.tk

Submission date: Monday, December 4, 2017 at 11:59 PM P.D.T.

Team members:

 *  Alex
 *  Edward
 *  Luis Roman
 *  Luke
 *  Nick
 *  Tara Ross
 *  Travis Keri

### Table of contents
 * [Summary of Changes](#changeSummary)
 * [Customer Statement of Requirements](#requirements)
 * [Glossary](#glossary) 
 * [Functional Requirments](#functional)
  * [Stakeholders](#stakeholders)
  * [Actors and Goals](#actor)
  * [Use Cases](#usecase)
  * [System Sequence Diagrams](#diagrams)
 * [Nonfunctional Requirements](#nonfunctional)
 * [Use Case Points Effort Estimation](#effortEstimation)
 * [Domain Analysis](#domain_analysis)
  * [Domain Model](#domain_model)
 * [Progress Report and Plan of Work](#progressReportandPOW)
   * [Progress Report](#progressReport)
   * [Plan of Work](#planOfWork)
 * [Interaction Diagrams](#interation)
 <!--Temporary separator just so I can see better -->
 * [Class Diagram and Interface Specification](#interface)
   * [Class Diagram](#classDiagram)
 * [System Architecture and System Design](#system)
   * [Architectural Style](#architecturalStyle)
   * [Identifying Subsystems](#identifyingSubsystems)
   * [Mapping Subsystems to Hardware](#mapping)
   * [Persistent Data Storage](#data)
   * [Network Protocal](#network)
   * [Global Control Flow](#controlFlow)
   * [Hardware Requirements](#hardward)
 * [Algorithms and Data Structures](#algorithmsDataStructures)
   * [Algorithms](#algorithms)
   * [Data Structures](#dataStructures)
 * [User Interface Design and Implementation](#uIDandI)
 * [History of Work](#history)


 

### <a name="changeSummary"></a>Summary of Changes
<hr>

Most of the changes here are deletions due to having too many extra features on top of the core function of the app. The necessary changes are:

* The ommission of the requirement _"REQ-2: System finds a place near me"_
* The ommission of the requirement _"REQ-6: User can reserve a room"_


### <a name="requirements"></a>Customer Requirements  
|Requirements|Priority|Description                                                                |
|------------|:------:|---------------------------------------------------------------------------|
|**REQ - 1** |5       |Find place on campus to study                                              |
|**REQ - 2** |3       |System finds a place near me                                               |
|**REQ - 3** |3       |System is easier to use than a map                                         |
|**REQ - 4** |1       |System can find group space                                                | 
|**REQ - 5** |2       |System can find quiet(nap) space                                           |
|**REQ - 6** |3       |User can reserve a room                                                    |
|**REQ - 7** |3       |System can search for amenities (locks/whiteboards/outlets/wi-fi/printers) |
|**REQ - 8** |4       |System analyzes data to track trends                                       |
|**REQ - 9** |3       |User can leave comments                                                    |

### <a name="glossary"></a>Glossary
  * Study Space: a place to study, sleep or work in a group
  * Amenities: outlets for charging, quiet, whiteboards, printers, monitors
  * Trends: useage trends for the different study spaces

### <a name="functional"></a>Functional Requirements
   * REQ-1: Find place on campus to study
   * REQ-4: System can find group space
   * REQ-7: System can search for amenities (locks/whiteboards/outlets/wifi/printers)
   * REQ-8: System analyzes data to track trends

#### <a name="stakeholders"></a>Stakeholders
  * Students: will be able to more effiecntly find and use study spaces
  * School: more attractive to prospective students because of it's high tech efficency
#### <a name="actor"></a>Actors and Goals  
<hr>

 *  Users-Use the system to find places to study 
 *  Admins-Manage the system to add or remove locations 

#### <a name="usecase"></a>Use Cases  
<hr> 

<!-- Hey guys, let's just assign our names to these okay? -->
Use Case Description  
 * UC-1 User searches for open study space  **_(Nick)_**
 * UC-2 User searches for study space with amenity  **_(Travis)_**
 * UC-3 User reserves a room  **_(Tara)_**
 * UC-4 System logs user in  **_(Luis)_**
 * UC-5 System analyzes trends  **_(Luke)_**			
 * UC-6 User input how busy an area is  **_(Alex)_**
 * UC-7 User leaves comment  **_(Edward)_**
 
 <hr>

|Use Case 1         |User searches for open study space                        |
|-------------------|----------------------------------------------------------|
|Related REQs       |REQ1, REQ2, REQ4, REQ5                                    |
|Initiating Actors  |Student                                                   |
|Actor's Goals      |To search for an open study spaces                        |
|Participating Actor|Database                                                  |
|Preconditions      |Search screen is active                                   |
|Postconditions     |Available space displayed                                 |
|Flow of Events     |                                                          |
|->                 |1.User selects the search option                          |
|<-                 |2.System displays the search page                         |
|->                 |3.User looks through open areas                           |
|<-                 |4.Database returns available space in the requested area  |

![image](diagrams/UC1_Diagram.png)

|Use Case 2         |User searches for a study space with amenity                                        |
|-------------------|------------------------------------------------------------------------------------|
|Related REQs       |REQ1, REQ2, REQ3, REQ7                                                                    |
|Initiating Actors  |Student                                                                             |
|Actor's Goals      |To search for study spaces with amenities(White boards, outlets, good wi-fi, ect...)|
|Participating Actor|None                                                                                |
|Preconditions      |Filter search is on screen                                                          |
|Postconditions     |Search results displayed on screen                                                  |
|Flow of Events     |                                                                                    |
|->                 |1.User selects the search option                                                    |
|<-                 |2.System displays the search page                                                   |
|->                 |3.User selects combatination of available amenities they want to search for         |
|<-                 |4.Database returns availible study areas and how full they are                      |
|Alt. Flow of Events|                                                                                    |
|->                 |3a.User selects combanation of unavailable amenities                                |
|<-                 |	4.Database returns and displays message to refine search                         |

![image](diagrams/UC2_Diagram.png)

|Use Case 3         |                                  |
|-------------------|----------------------------------|
|Related REQs       |REQ6                              |
|Initiating Actors  |Student                           |
|Actor's Goals      |To reserve a room                 |
|Participating Actor|None                              |
|Preconditions      |Room is empty                     |
|Postconditions     |Room will now be reserved         |
|Flow of Events     |                                  |
|->                 |1. User selects reserve a room option|
|<-                 |2. System displays whether or not room is available|
|->		    |3. User reserves available room   |
|<-		    |4. System displays confirmation   | 

![image](diagrams/UC3_diagram.png)

|Use Case 4         |System logs user in                                        |
|-------------------|------------------------------------------------------------------------------------|
|Related REQs       |REQ3, REQ6, REQ7                                                                    |
|Initiating Actors  |Student                                                                             |
|Actor's Goals      |To be identified by the system so that the system can record the actor who is reserving a room and link its input as well as comments to itself.|
|Participating Actor|None                                                                                |
|Preconditions      |The actor has a username registered in the database or has a browser with cookies enabled to be allowed to enter to the system as a guest.                                                          |
|Postconditions     |The user is logged in as a registered user or a guest.                                                  |
|Flow of Events     |                                                                                    |
|<-		|1.System displays main menu and prompts for method for system access: username account or guest|
|->                 |2.User submits log in information                                                    |
|<-                 |3.System displays if the user logged in successfully                                                   |
|<-                 |4.System displays option to add input, comments or reserve a room         |
|Alt. Flow of Events|                                                                                    |
|->                 |2a.User has cookies enabled and logs in as a guest                                |
|<-                 |3a.System displays option to add input as to how busy an area is                         |
|Second Alt. Flow of Events| |
|<-|3b. System displays that the user was unable to log in successfully and is returned to the main menu|

![image](diagrams/UC4.png)

|Use Case 5         |System analyzes trends                  |
|-------------------|----------------------------------------|
|Related REQs       | REQ1, REQ2, REQ4, REQ5, REQ6, and REQ8 |
|Initiating Actors  | Admin                                  |
|Actors Goal        | Analyze trends to predict study space  |
|                   | availability                           |
|Participating Actor| Student                                |
|Preconditions      | database is not empty                  |
|Postconditions     | useage trend data is updated           |
|Event Flow         |                                        |
|->                 | update triggers analysis algorithm     |
|<-                 | Database releases updated trend data   |

![image](diagrams/UC5.png)

|Use Case 6          |User inputs how busy an area is                       |
|--------------------|------------------------------------------------------|
|Related REQs        |REQ9                                                  |
|Initiating actors   |Student                                               |
|Actor's goals       |Student can submit how busy an area is                |
|Participating actors|None                                                  |
|Preconditions       |Selection screen for level of space congestion        |
|                    |Button for submitting space congestion level          |
|Postconditions      |Data is submitted and stored in database              |
|**Flow of events**  |**Scenario 1**                                        |
|**->**              |1. _User selects the "Submit" button for current area_|
|**<-**              |2. _System displays options for level of congestion_  |
|**->**              |3a. _User selects either 1, 2 , or 3 on screen_       |
|**<-**              |4a. _System thanks user for submitting feedback_      |
|                    | _System sends user back to floor status page_        |
|**Alternate events**|**Scenario 2**                                        |
|**->**              |3b. _User selects the cancel option_                  |
|**<-**              |4b. _System brings user back to the floor status page_|

![image](diagrams/UC6_Diagram.png)

|Use Case 7          |User enters a comment                                 |
|--------------------|------------------------------------------------------|
|Related REQs        |REQ9, REQ1                                            |
|Initiating actors   |Student                                               |
|Actor's goals       |Student can comment anything about a room             |
|Participating actors|None                                                  |
|Preconditions       |Selection of room                                     |
|                    |Text field for inputting comments                     |
|Postconditions      |Comment is submitted and stored in database           |
|**Flow of events**  |**Scenario 1**                                        |
|**->**              |1. _User selects a floor/room to comment on_          |
|**<-**              |2. _System displays a text box_                       | 
|**->**              |3a. _User enters and submits a comment_               |
|**<-**              |4a. _System adds comment to db_                       |
|**Alternate events**|**Scenario 2**                                        |
|**->**              |3b. _User selects the cancel option_                  |
|**<-**              |4b. _System closes text box, but stays on the page_   |

![image](diagrams/UC7_Diagram.png)

**Traceability Matrix**  

|**Req't**|**PW**|UC1|UC2|UC3|UC4|UC5|UC6|UC7|
|---------|:----:|:-:|:-:|:-:|:-:|:-:|:-:|:-:|
|REQ1     |5     |X  |X  |   |   |X  |   | X |
|REQ2     |3     |X  |X  |   |   |X  |   |   |
|REQ3     |3     |   |   |   |x  |   |   |   |
|REQ4     |1     |X  |   |   |   |X  |   |   |
|REQ5     |2     |X  |   |   |   |X  |   |   |
|REQ6     |3     |   |   |X  |x  |X  |   |   |
|REQ7     |3     |   |X  |   |x  |   |   |   |
|REQ8     |4     |   |   |   |   |X  |   |   |
|REQ9     |3     |   |   |   |   |   |X  | X |
|MAX PW   |      |5  |5  |3  |3  |5  |3  | 5 |
|Total PW |      |11 |11 |3  |9  |18 |3  | 8 |

#### <a name="diagrams"></a>System Sequence Diagrams

![image](diagrams/System_Sequence_Diagrams/usecase_1-2.png)

![image](diagrams/System_Sequence_Diagrams/usecase_6.png)

![image](diagrams/System_Sequence_Diagrams/usecase_3.png)


### <a name="nonfunctional"></a>Nonfunctional Requirements

  * REQ-3: System is easier to use than a map
  * REQ-5: System can find a quiet (nap) space
  * REQ-9: User can leave comments
#### <a name="effortEstimation"></a>Use Case Points Effort Estimation
<hr>

    Use case points stuff goes here!!  
	
### <a name="domain_analysis"></a>Domain Analysis

#### <a name="domain_model"></a>Domain Model

![image](diagrams/domainmodel.png)

#### <a name="data"></a>Persistent Data Storage
<hr>

Yes, we are using a relational database for data storage.  There are three tables.

1. Data Table     - Stores the user input as an int, and is associated with a floor and building id.

2. Building Table - Stores information about the building that will apply to all floors. 

3. Floor Table    - Stores information about each floor, and is associated with the building id. 

#### <a name="network"></a>Network Protocal
<hr>

We are using HTTP. We chose HTTP simply because the majority of the group had some experie with HTTP, and it is easy to work with.  This is the network protocal that our framework of choice uses. 

#### <a name="controlFlow"></a>Global Control Flow
<hr>

  ##### Execution Orderness

    The system is not procedure driven.  The user has the ability to select which part of
    the website that they would like to interact with.  There is no specific order that the 
    client has to interact with the website.  

  ##### Time Dependency

    There are automated algorithms that will run at specific times in the day.  
    These are realtime events that occur periodically.  The algorithms are for caching analyzed trends.

  ##### Concurrency 

    This system will run on an apache server.  That server will handle multiple requests 
    and allow for serveral users.  The users will all access the same database.  The apache php 
    will be single threaded. 

#### <a name="hardware"></a>Hardware Requirements
<hr>

    The system runs on a linux box that is remotely hosted.  The server only need about 1GB of
     space and a single core allocated to host and serve content.  To use the system, the client needs
    to have a computer capable of visiting a webpage.  


### <a name="algorithmsDataStructures"></a>Alorithms and Data Structures
<hr>

### <a name="algorithmsDataStructures"></a>Algorithms and Data Structures
<hr>

#### <a name="algorithms"></a>Algorithms
As of now, the team has only developed the algorithm for the user to log in. No other advanced algorithms have been developed at the moment.
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

### <a name="uIDandI"></a>User Interface Design and Implementation
<hr>

#### Find Spot
The user will start at the "Find a Spot" page, which will display what campus you are at and a search prompt to find desired building. Below, there is a list of all the buildings that can be clicked on to show the availability for each floor the building has.


![image](diagrams/FindSpot.PNG)


![image](diagrams/FindSpot2.PNG)


#### Menu
The sidebar menu will be available to the user at all times.  One tap on the menu icon will pull up the menu and allow the user to easily navigate the site. Can choose between "Find a Spot", "My Account", and "Support"

![image](diagrams/Menu.PNG)

#### Login Page
User can login to original account or create a new account, if they are new to the site.

![image](diagrams/Login.PNG)

#### Scenario 1: User looks for any open area nearby.
1. Navigation: 1 Total Click
* User clicks on one of the nearby listed building for information about open rooms.
2. Data Entry: None
3. Fraction of Nav vs Data Entry (Nav/Data)
* All Navigation

#### Scenario 2: User looks for any open areas, with desired features, nearby.
 -1. Navigation: 1 Total Click
 -* User clicks on desired features.
 
#### Scenario 3: User contributes data for a room.
 -1. Navigation: 4 Total Clicks
 -* User clicks on one of the nearby listed buildings for information about open rooms.
 -* User clicks "Update Status"
 -* User fills out form
 -* User clicks submit
 -2. Data Entry: 1 click
 -* User click one of the three options for how full a room is
 -3. Fraction of Nav vs Data Entry (Nav/Data)
 -* 4/1

### <a name="progressReportsandPOW"></a>Progress Report and Plan of Work
<hr>

### Use Cases implemented so far:

|Implemented     |Use Case Description                               |
|----------------|---------------------------------------------------|
|**In progress** | * UC-1 User searches for open study space         |
|**In Progress** | * UC-2 User searches for study space with amenity |
|**No**          | * UC-3 User reserves a room                       |
|**In progress** | * UC-4 System logs user in                        |
|**In progress** | * UC-5 System analyzes trends                     |
|**In limbo**    | * UC-6 User input how busy an area is             |
|**Not yet**     | * UC-7 User leaves comment                        |


### UC-1
    A search bar has been added to the front page of the website. 
### UC-2
    Amenities can now be chosen through a drop down accordian menu.
### UC-3
    Reserving of rooms has not been implemented yet.
### UC-4
    Login page accessible from the side menu with option to sign up. 
### UC-5
    A working algorithm has not been started on yet.
### UC-6
    No user access but admins can change traffic status.
### UC-7
    Option for users to leave comments have not been implemented yet.
#### <a name="planOfWork"></a>Plan of Work

![image](diagrams/PlanOfWorkChart.png)
![image](diagrams/PlanOfWorkGraph.png)

### Breakdown of Responsibilities

|Task           |Members               |
|---------------|----------------------|
|Coordinator    |Edward                |
|JavaScript     |_Edward, Alex_        |
|HTML/CSS       |_Nick_                |
|Algorithms     |_Travis_              |
|Backend        |_Luke, Luis, Tara_    |

### <a name="interation"></a>Interation Diagram
<hr>

**Use case 1 & 2**

![image](diagrams/Interaction_Diagrams/Use_case_1-2_interaction_diagram.jpg)

**Use case 3**

We have decided to put this use case on hold, to focus on the others. If there is time to implement them we will come back to them.

**Use case 4**

![image](diagrams/Interaction_Diagrams/Use_case_4_interaction_diagram.jpg)

**Use case 5**

![image](diagrams/Interaction_Diagrams/Use_case_5_interaction_diagram.jpg)

**Use case 6**

![image](diagrams/Interaction_Diagrams/Use_case_6_interaction_diagram.jpg)

**Use case 7**

![image](diagrams/Interaction_Diagrams/Use_case_7_interaction_diagram.jpg)

### <a name="interface"></a>Class Diagram and Interface Specification
<hr>

#### <a name="classDiagram"></a>Class Diagram
![image](diagrams/class3.png)
<hr>

<!--PLACEHOLDER-->
### <a name="system"></a>System Architecture and System Design
<hr>

#### <a name="architcturalStyle"></a>Architecural Style
<hr>

For our archictecture we used a central database to store all data.  It is a MYSQL database. The webserver pulls all data from this one database.


#### <a name="identifyinSubsystems"></a>Identifying Subsystems
<hr>


  ![image](diagrams/subsystems.png)
  <br>
    The three subsystems are the client's browser, the server, and the database.  The client will access the server and the server retrieve data from the database. 

#### <a name="mapping"></a>Mapping Subsystems to Hardware
<hr>

    There is a server that serves a website.  
    Users are able to access the webpage with a web browser.  The UI that the user interacts with
    is run on the user's computer that is being used to visit the webpage.  The web server 
    runs on a linux machine that is being hosted remotely.  
#### <a name="history"></a>History of Work
<hr>
	The initial design was meant to use Java but we decided to go with 
	php in order to use a framework that makes the U.I. easier to develop.
	After starting with php we began a structured design that we had to
	re work into classes upon conflicts with report specifications from
	management.  What started as a bit of a top down decision making process
	was quickly turned into an excercise in changing the lower level to
	spec and the U.I.  Both strutured and object oriented approaches 
	revolve around the MySql database connection.  The design is modular
	enough to leave room for extension.
