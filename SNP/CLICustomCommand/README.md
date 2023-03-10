
# How to Create Custom Console Command in Magento 2?

## Steps:

Creating a custom console command in Magento 2 involves the following steps:

- Create a Module: Start by creating a module, if you don’t already have one. To create a new module, create the following directory structure in the “app/code” folder:

![folders-structure-for-magento-2-module](https://github.com/nrauf90/magento/blob/main/images/folder-structure.png?raw=true)

- Create a module.xml file in the “etc” folder and add the following code:

![module-xml-file](https://github.com/nrauf90/magento/blob/main/images/module.xml.png?raw=true)

- And create a registration.php file in the same folder to register your module:

![registration php file](https://github.com/nrauf90/magento/blob/main/images/registration.php.png?raw=true)

- Create a Command Class: In the “/app/code/SNP/CLICustomCommand/Command” folder, create a Command class named “SNPCLICustomCommand.php” and add the following code:

![test](https://github.com/nrauf90/magento/blob/main/images/console-command.png?raw=true)

- Define the Command: In the Command class, you need to define the command by implementing the “configure” method and adding the name, description and options of your command. In this example, we are defining a simple “snp:welcome”
  command with a description.

![configure function](https://github.com/nrauf90/magento/blob/main/images/configure-function.png?raw=true)

- Implement the Execute Method: Implement the “execute” method that will be executed when the command is run. This method should contain the logic of your command. In this example, we are printing a simple “Welcome!” message.

![console-command-class](https://github.com/nrauf90/magento/blob/main/images/execute-function.png?raw=true)

- Add the Command to di.xml: In the “etc” folder of your module, create a “di.xml” file and add the following code to register your custom command:

![di xml file](https://github.com/nrauf90/magento/blob/main/images/di.xml.png?raw=true)

- Final Module Structure:

![final module stucture](https://github.com/nrauf90/magento/blob/main/images/final-module-structure.png?raw=true)

- Run the Command: open the terminal, navigate to the Magento root directory, Run the magento Setup upgrade command to make sure magento register you module
`[root]: php bin/magento setup:upgrade`
- Run the Command: Finally, open the terminal, navigate to the Magento root directory, and run the command using the following syntax:
`php bin/magento snp:welcome`

##### Note:

Replace [VendorName] and [ModuleName] with your specific module name.


