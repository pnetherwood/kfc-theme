# Makefile for KFC Theme
# Creates a distributable theme package

THEME_NAME = kfc-theme
BUILD_DIR = build
DIST_DIR = dist
ZIP_FILE = $(THEME_NAME).zip

# Files and directories to include in the theme package
INCLUDE_FILES = \
	style.css \
	functions.php \
	theme.json \
	screenshot.png \
	README.md

INCLUDE_DIRS = \
	templates \
	parts \
	patterns \
	assets

# Files and patterns to exclude
EXCLUDE_PATTERNS = \
	*.git* \
	*.DS_Store \
	node_modules \
	*.log \
	Makefile \
	build \
	dist

.PHONY: all clean build zip install help

# Default target
all: clean build zip

# Build the theme package
build:
	@echo "Building $(THEME_NAME) theme package..."
	@mkdir -p $(BUILD_DIR)/$(THEME_NAME)

	@echo "Copying theme files..."
	@for file in $(INCLUDE_FILES); do \
		if [ -f $$file ]; then \
			cp $$file $(BUILD_DIR)/$(THEME_NAME)/; \
		fi; \
	done

	@echo "Copying theme directories..."
	@for dir in $(INCLUDE_DIRS); do \
		if [ -d $$dir ]; then \
			cp -r $$dir $(BUILD_DIR)/$(THEME_NAME)/; \
		fi; \
	done

	@echo "Theme built successfully in $(BUILD_DIR)/$(THEME_NAME)"

# Create ZIP file
zip: build
	@echo "Creating distribution package..."
	@mkdir -p $(DIST_DIR)
	@cd $(BUILD_DIR) && zip -r ../$(DIST_DIR)/$(ZIP_FILE) $(THEME_NAME) -x "*.DS_Store" "*.git*"
	@echo "Theme package created: $(DIST_DIR)/$(ZIP_FILE)"
	@echo ""
	@echo "Installation instructions:"
	@echo "1. Go to WordPress Admin > Appearance > Themes"
	@echo "2. Click 'Add New' > 'Upload Theme'"
	@echo "3. Choose the file: $(DIST_DIR)/$(ZIP_FILE)"
	@echo "4. Click 'Install Now'"

# Clean build artifacts
clean:
	@echo "Cleaning build artifacts..."
	@rm -rf $(BUILD_DIR)
	@rm -rf $(DIST_DIR)
	@echo "Clean complete"

# Install theme locally (for development)
install: zip
	@echo "Installing theme to WordPress..."
	@if [ -d "../../kfc-theme" ]; then \
		echo "Backing up existing theme..."; \
		mv ../../kfc-theme ../../kfc-theme.backup.$$(date +%Y%m%d_%H%M%S); \
	fi
	@mkdir -p ../../
	@unzip -q $(DIST_DIR)/$(ZIP_FILE) -d ../..
	@echo "Theme installed successfully"

# Show help
help:
	@echo "KFC Theme Build System"
	@echo ""
	@echo "Available targets:"
	@echo "  make          - Build and create theme ZIP package (default)"
	@echo "  make build    - Build theme files into build directory"
	@echo "  make zip      - Create distributable ZIP file"
	@echo "  make clean    - Remove build artifacts"
	@echo "  make install  - Install theme locally (development)"
	@echo "  make help     - Show this help message"
	@echo ""
	@echo "Output:"
	@echo "  Build directory: $(BUILD_DIR)/"
	@echo "  Distribution:    $(DIST_DIR)/$(ZIP_FILE)"
