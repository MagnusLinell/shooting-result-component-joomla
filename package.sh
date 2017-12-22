#!/bin/sh

mkdir -p build
rm -r build/*
cp pkg_shooting_result/* build/.
mkdir -p build/packages
zip -r build/packages/com_shooting_result.zip com_shooting_result
mkdir -p dist
zip -r "dist/pkg_shooting_result_$(date +"%Y_%m_%d_%H_%M_%S").zip" build
