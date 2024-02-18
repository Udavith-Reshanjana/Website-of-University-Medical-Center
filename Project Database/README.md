# Website-of-University-Medical-Center

### Database Setup

To import the project database to your system using phpMyAdmin, follow the steps below:

1. **Download the SQL Dump File**: Download the provided SQL dump file (`databaseofcaarc.sql`) from this repository.

2. **Access phpMyAdmin**: Open your web browser and navigate to your phpMyAdmin instance.

3. **Login**: Log in to phpMyAdmin using your credentials.

4. **Select Database**: Select the database where you want to import the data. If the database doesn't exist, create a new one named `databaseofumc`.

5. **Import**: 
    - Click on the "Import" tab in the top menu.
    - Click on the "Choose File" button and select the downloaded SQL dump file (`databaseofcaarc.sql`).
    - Ensure the "Format" is set to "SQL".
    - Click on the "Go" or "Import" button to start the import process.

6. **Confirmation**: Once the import is complete, you should see a success message indicating that the SQL file has been imported successfully.

Alternatively, you can use the command line with MySQL to import the database:

```bash
# Example command to import the database script
mysql -u your_username -p databaseofumc < databaseofumc.sql
```

## Database Structure

This database contains the following tables:

1. **appoinment**: Stores information about appointments including appointment number, community ID, appointment date, time, gender, email, and symptoms.

2. **appoinment_contact_no**: Holds contact numbers associated with appointments.

3. **communitty**: Stores information about communities including community ID, name, user ID, password, and type.

4. **doctor**: Contains data about doctors including ID, name, and specialized area.

5. **doctor_qualification**: Stores doctor qualifications linked to their IDs.

6. **feedback**: Records feedback provided by patients including feedback number, community ID, feedback date, waiting time, doctor knowledge rating, doctor kindness rating, hygiene rating, and suggestions.

## Follow Me

- **LinkedIn:** [Udavith Reshanjana](https://www.linkedin.com/in/udavith-reshanjana)
- **GitHub:** [Udavith-Reshanjana](https://github.com/Udavith-Reshanjana)

## Note

- Make sure to review your phpMyAdmin privileges to ensure you have the necessary permissions to import databases.
- Verify the import by checking the tables and their data after the import process is complete.

Thank you.
