#!/bin/sh

mkdir -p build
rm -r build/*
cp pkg_shooting/* build/.
mkdir -p build/packages
zip -r build/packages/com_shooting_result.zip com_shooting_result
zip -r build/packages/com_shooting_event.zip com_shooting_event
mkdir -p dist
zip -r "dist/pkg_shooting_$(date +"%Y_%m_%d_%H_%M_%S").zip" build
