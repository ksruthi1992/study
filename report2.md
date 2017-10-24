## Report 2
### Cover Page and Individual Contribution

Course title: CSC 131 Section 4 - Computer Software Engineering

Team number: 2

Team name: Team Tux

Project: Study Spot Finder

Project website: www.SpotFinder.tk

Submission date: Monday, September 25, 2017 at 5:00 PM P.D.T.

Team members:

 *  Alex
 *  Edward
 *  Luis Roman
 *  Luke
 *  Nick
 *  Tara Ross
 *  Travis Keri

### Table of contents
 * [Interation Diagrams](#interation)
 * [Class Diagram and Interface Specification](#interface)
   * [Class Diagram](#classDiagram)
   * [Data Types and Operation Signatures](#dataTypes)
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
 * [Progress Report and Plan of Work](#progressReportandPOW)
   * [Progress Report](#progressReport)
   * [Plan of Work](#planOfWork)

### <a name="interation"></a>Interation Diagram
<hr>

**Use case 1 & 2**

![image](diagrams/Interaction_Diagrams/Use_case_1-2_interaction_diagram.jpg)

**Use case 3 & 4**

We have decided to put this use case on hold, to focus on the others. If there is time to implement them we will come back to them.

**Use case 5**

![image](diagrams/Interaction_Diagrams/Use_case_5_interaction_diagram.jpg)

**Use case 6**

![image](diagrams/Interaction_Diagrams/Use_case_6_interaction_diagram.jpg)

**Use case 7**

![image](diagrams/Interaction_Diagrams/Use_case_7_interaction_diagram.jpg)

### <a name="interface"></a>Class Diagram and Interface Specification
<hr>

#### <a name="classDiagram"></a>Class Diagram
<hr>

#### <a name="dataTypes"></a>Data Types and Operation Signatures
<hr>

### <a name="system"></a>System Architecture and System Design
<hr>

#### <a name="architcturalStyle"></a>Architecural Style
<hr>

#### <a name="identifyinSubsystems"></a>Identifying Subsystems
<hr>

#### <a name="mapping"></a>Mapping Subsystems to Hardware
<hr>

#### <a name="data"></a>Persistent Data Storage
<hr>

#### <a name="network"></a>Network Protocal
<hr>

#### <a name="controlFlow"></a>Global Control Flow
<hr>

#### <a name="hardware"></a>Hardware Requirements
<hr>

### <a name="algorithmsDataStructures"></a>Alorithms and Data Structures
<hr>

#### <a name="algorithms"></a>Algorithms
<hr>

#### <a name="dataStuctures"></a>Data Structures
<hr>

### <a name="uIDandI"></a>User Interface Design and Implementation
<hr>

### <a name="progressReportsandPOW"></a>Progress Report and Plan of Work
<hr>

#### <a name="progressReport"></a>ProgressReport
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

<hr>



### Breakdown of Responsibilities

|Task           |Members               |
|---------------|----------------------|
|Coordinator    |Edward                |
|JavaScript     |_Edward, Alex_        |
|HTML/CSS       |_Nick_                |
|Algorithms     |_Travis_              |
|Backend        |_Luke, Luis, Tara_    |
