# CMAKE generated file: DO NOT EDIT!
# Generated by "MinGW Makefiles" Generator, CMake Version 3.6

# Delete rule output on recipe failure.
.DELETE_ON_ERROR:


#=============================================================================
# Special targets provided by cmake.

# Disable implicit rules so canonical targets will work.
.SUFFIXES:


# Remove some rules from gmake that .SUFFIXES does not remove.
SUFFIXES =

.SUFFIXES: .hpux_make_needs_suffix_list


# Suppress display of executed commands.
$(VERBOSE).SILENT:


# A target that is always out of date.
cmake_force:

.PHONY : cmake_force

#=============================================================================
# Set environment variables for the build.

SHELL = cmd.exe

# The CMake executable.
CMAKE_COMMAND = "C:\Program Files (x86)\JetBrains\CLion 2016.3.4\bin\cmake\bin\cmake.exe"

# The command to remove a file.
RM = "C:\Program Files (x86)\JetBrains\CLion 2016.3.4\bin\cmake\bin\cmake.exe" -E remove -f

# Escaping for special characters.
EQUALS = =

# The top-level source directory on which CMake was run.
CMAKE_SOURCE_DIR = C:\Users\User\CLionProjects\AckermannFunction

# The top-level build directory on which CMake was run.
CMAKE_BINARY_DIR = C:\Users\User\CLionProjects\AckermannFunction\cmake-build-debug

# Include any dependencies generated for this target.
include CMakeFiles/AckermannFunction.dir/depend.make

# Include the progress variables for this target.
include CMakeFiles/AckermannFunction.dir/progress.make

# Include the compile flags for this target's objects.
include CMakeFiles/AckermannFunction.dir/flags.make

CMakeFiles/AckermannFunction.dir/main.cpp.obj: CMakeFiles/AckermannFunction.dir/flags.make
CMakeFiles/AckermannFunction.dir/main.cpp.obj: ../main.cpp
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green --progress-dir=C:\Users\User\CLionProjects\AckermannFunction\cmake-build-debug\CMakeFiles --progress-num=$(CMAKE_PROGRESS_1) "Building CXX object CMakeFiles/AckermannFunction.dir/main.cpp.obj"
	C:\MinGW\bin\g++.exe   $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) -o CMakeFiles\AckermannFunction.dir\main.cpp.obj -c C:\Users\User\CLionProjects\AckermannFunction\main.cpp

CMakeFiles/AckermannFunction.dir/main.cpp.i: cmake_force
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green "Preprocessing CXX source to CMakeFiles/AckermannFunction.dir/main.cpp.i"
	C:\MinGW\bin\g++.exe  $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) -E C:\Users\User\CLionProjects\AckermannFunction\main.cpp > CMakeFiles\AckermannFunction.dir\main.cpp.i

CMakeFiles/AckermannFunction.dir/main.cpp.s: cmake_force
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green "Compiling CXX source to assembly CMakeFiles/AckermannFunction.dir/main.cpp.s"
	C:\MinGW\bin\g++.exe  $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) -S C:\Users\User\CLionProjects\AckermannFunction\main.cpp -o CMakeFiles\AckermannFunction.dir\main.cpp.s

CMakeFiles/AckermannFunction.dir/main.cpp.obj.requires:

.PHONY : CMakeFiles/AckermannFunction.dir/main.cpp.obj.requires

CMakeFiles/AckermannFunction.dir/main.cpp.obj.provides: CMakeFiles/AckermannFunction.dir/main.cpp.obj.requires
	$(MAKE) -f CMakeFiles\AckermannFunction.dir\build.make CMakeFiles/AckermannFunction.dir/main.cpp.obj.provides.build
.PHONY : CMakeFiles/AckermannFunction.dir/main.cpp.obj.provides

CMakeFiles/AckermannFunction.dir/main.cpp.obj.provides.build: CMakeFiles/AckermannFunction.dir/main.cpp.obj


# Object files for target AckermannFunction
AckermannFunction_OBJECTS = \
"CMakeFiles/AckermannFunction.dir/main.cpp.obj"

# External object files for target AckermannFunction
AckermannFunction_EXTERNAL_OBJECTS =

AckermannFunction.exe: CMakeFiles/AckermannFunction.dir/main.cpp.obj
AckermannFunction.exe: CMakeFiles/AckermannFunction.dir/build.make
AckermannFunction.exe: CMakeFiles/AckermannFunction.dir/linklibs.rsp
AckermannFunction.exe: CMakeFiles/AckermannFunction.dir/objects1.rsp
AckermannFunction.exe: CMakeFiles/AckermannFunction.dir/link.txt
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green --bold --progress-dir=C:\Users\User\CLionProjects\AckermannFunction\cmake-build-debug\CMakeFiles --progress-num=$(CMAKE_PROGRESS_2) "Linking CXX executable AckermannFunction.exe"
	$(CMAKE_COMMAND) -E cmake_link_script CMakeFiles\AckermannFunction.dir\link.txt --verbose=$(VERBOSE)

# Rule to build all files generated by this target.
CMakeFiles/AckermannFunction.dir/build: AckermannFunction.exe

.PHONY : CMakeFiles/AckermannFunction.dir/build

CMakeFiles/AckermannFunction.dir/requires: CMakeFiles/AckermannFunction.dir/main.cpp.obj.requires

.PHONY : CMakeFiles/AckermannFunction.dir/requires

CMakeFiles/AckermannFunction.dir/clean:
	$(CMAKE_COMMAND) -P CMakeFiles\AckermannFunction.dir\cmake_clean.cmake
.PHONY : CMakeFiles/AckermannFunction.dir/clean

CMakeFiles/AckermannFunction.dir/depend:
	$(CMAKE_COMMAND) -E cmake_depends "MinGW Makefiles" C:\Users\User\CLionProjects\AckermannFunction C:\Users\User\CLionProjects\AckermannFunction C:\Users\User\CLionProjects\AckermannFunction\cmake-build-debug C:\Users\User\CLionProjects\AckermannFunction\cmake-build-debug C:\Users\User\CLionProjects\AckermannFunction\cmake-build-debug\CMakeFiles\AckermannFunction.dir\DependInfo.cmake --color=$(COLOR)
.PHONY : CMakeFiles/AckermannFunction.dir/depend

