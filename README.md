# Phping: step by step learning php 

![GitHub Repo stars](https://img.shields.io/github/stars/imaarov/Phping?style=for-the-badge&logo=github)
![GitHub forks](https://img.shields.io/github/forks/imaarov/Phping?style=for-the-badge&logo=github)
![GitHub issues](https://img.shields.io/github/issues/imaarov/Phping?style=for-the-badge&logo=github)
![GitHub](https://img.shields.io/github/license/imaarov/Phping?style=for-the-badge&logo=github)

Welcome to **Phping**, a step-by-step PHP learning repository inspired by Zigling. In this repository, you'll find PHP files with intentional errors that you need to fix. By doing so, you'll improve your PHP skills. Let's get started!

## 📑 Table of Contents

- [📖 Introduction](#introduction)
- [🚀 Getting Started](#getting-started)
- [🗂️ Directory Structure](#directory-structure)
- [🔧 How to Use](#how-to-use)
- [✅ Running Tests](#running-tests)
- [🤝 Contributing](#contributing)
- [📜 License](#license)

## 📖 Introduction

Phping is a learning tool designed to help you get better at PHP by fixing errors in provided files. Each task file contains intentional errors for you to identify and correct. After fixing a file, you can run tests to ensure your solution is correct.

## 🚀 Getting Started

### Prerequisites

- PHP (>= 8.2)
- Composer

### Installation

1. **Clone the repository:**

    ```sh
    git clone https://github.com/imaarov/Phping.git
    cd Phping
    ```

2. **Install dependencies:**

    ```sh
    composer install
    ```

## 🗂️ Directory Structure

Here's an overview of the directory structure:

	```
	Phping/
	│
	├── README.md
	├── composer.json
	├── phping           # The executable file for running tests
	├── tests/
	│   ├── 01_Basics/
	│   │   ├── 01_TaskTest.php
	│   │   ├── 02_TaskTest.php
	│   │   └── ...
	│   └── bootstrap.php
	└── src/
	    ├── Basics/
	    │   ├── Task1.php
	    │   ├── Task2.php
	    │   └── ...
	```

## 🔧 How to Use

1. **Navigate to the `src` directory:**

    ```sh
    cd src/Basics
    ```

2. **Choose a task file to work on:**

    ```sh
    ls
    ```

    You'll see a list of PHP files, each representing a task. Open one of the files and start fixing the errors.

3. **Fix the errors in the chosen file.**

## ✅ Running Tests

To check if your solution is correct, use the `phping` executable to run the tests:

1. **Make the `phping` file executable (if not already done):**

    ```sh
    chmod +x phping
    ```

2. **Run the tests:**

    ```sh
    ./phping tests/01_Basics/01_TaskTest.php #not working yet
    ./phping 								 #you can chose the testing file responsible for the script 
    # OR you can use it with php
    php phping 
    ```
    
3. **Choose the directory**
	```sh
	❯ ./phping

	Choose the directory:
	0-01_Basics
	1-02_Intermediate
	2-03_Advance
	Enter the directory level: 0
	```
4. **Choose the test file** 
	```sh
	0-VariableTest.php
	Enter the test file for execute the test: 0
	```
5. **Test will run!**
	```sh
	PHPUnit 11.2.0 by Sebastian Bergmann and contributors.

	Runtime:       PHP 8.3.8

	.                                                                   1 / 1 (100%)

	Time: 00:00.003, Memory: 6.00 MB

	OK (1 test, 1 assertion)
	```

## 🤝 Contributing

Contributions are welcome! If you have suggestions for improvements or new tasks, please open an issue or submit a pull request.

## 📜 License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

